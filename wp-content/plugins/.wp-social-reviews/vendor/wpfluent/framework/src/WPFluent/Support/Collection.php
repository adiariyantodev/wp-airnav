<?php

namespace WPSocialReviews\Framework\Support;

use Closure;
use Countable;
use ArrayAccess;
use Traversable;
use ArrayIterator;
use CachingIterator;
use JsonSerializable;
use IteratorAggregate;
use WPSocialReviews\Framework\Support\Arr;
use WPSocialReviews\Framework\Support\Helper;
use WPSocialReviews\Framework\Support\MacroableTrait;
use WPSocialReviews\Framework\Support\JsonableInterface;
use WPSocialReviews\Framework\Support\ArrayableInterface;

class Collection implements ArrayAccess, ArrayableInterface, Countable, IteratorAggregate, JsonableInterface, JsonSerializable
{
    use MacroableTrait;

    /**
     * The items contained in the collection.
     *
     * @var array
     */
    protected $items = [];

    /**
     * Create a new collection.
     *
     * @param  mixed  $items
     * @return void
     */
    public function __construct($items = [])
    {
        $this->items = $this->getArrayableItems($items);
    }

    /**
     * Create a new collection instance if the value isn't one already.
     *
     * @param  mixed  $items
     * @return static
     */
    public static function make($items = [])
    {
        return new static($items);
    }

    /**
     * Get all of the items in the collection.
     *
     * @return array
     */
    public function all()
    {
        return $this->items;
    }

    /**
     * Get the average value of a given key.
     *
     * @param  string|null  $key
     * @return mixed
     */
    public function avg($key = null)
    {
        if ($count = $this->count()) {
            return $this->sum($key) / $count;
        }
    }

    /**
     * Alias for the "avg" method.
     *
     * @param  string|null  $key
     * @return mixed
     */
    public function average($key = null)
    {
        return $this->avg($key);
    }

    /**
     * Get the median of a given key.
     *
     * @param  null $key
     * @return mixed|null
     */
    public function median($key = null)
    {
        $count = $this->count();

        if ($count == 0) {
            return;
        }

        $values = (isset($key) ? $this->pluck($key) : $this)
                    ->sort()->values();

        $middle = (int) floor($count / 2);

        if ($count % 2) {
            return $values->get($middle);
        }

        return (new static([
            $values->get($middle - 1), $values->get($middle),
        ]))->average();
    }

    /**
     * Get the mode of a given key.
     *
     * @param  null $key
     * @return array
     */
    public function mode($key = null)
    {
        $count = $this->count();

        if ($count == 0) {
            return;
        }

        $collection = isset($key) ? $this->pluck($key) : $this;

        $counts = new self;

        $collection->each(function ($value) use ($counts) {
            $counts[$value] = isset($counts[$value]) ? $counts[$value] + 1 : 1;
        });

        $sorted = $counts->sort();

        $highestValue = $sorted->last();

        return $sorted->filter(function ($value) use ($highestValue) {
            return $value == $highestValue;
        })->sort()->keys()->all();
    }

    /**
     * Collapse the collection of items into a single array.
     *
     * @return static
     */
    public function collapse()
    {
        return new static(Arr::collapse($this->items));
    }

    /**
     * Determine if an item exists in the collection.
     *
     * @param  mixed  $key
     * @param  mixed  $value
     * @return bool
     */
    public function contains($key, $value = null)
    {
        if (func_num_args() == 2) {
            return $this->contains(function ($k, $item) use ($key, $value) {
                return Helper::dataGet($item, $key) == $value;
            });
        }

        if ($this->useAsCallable($key)) {
            return ! is_null($this->first($key));
        }

        return in_array($key, $this->items);
    }

    /**
     * Get the items in the collection that are not present in the given items.
     *
     * @param  mixed  $items
     * @return static
     */
    public function diff($items)
    {
        return new static(array_diff($this->items, $this->getArrayableItems($items)));
    }

    /**
     * Get the items in the collection whose keys are not present in the given items.
     *
     * @param  mixed  $items
     * @return static
     */
    public function diffKeys($items)
    {
        return new static(array_diff_key($this->items, $this->getArrayableItems($items)));
    }

    /**
     * Execute a callback over each item.
     *
     * @param  callable  $callback
     * @return $this
     */
    public function each(callable $callback)
    {
        foreach ($this->items as $key => $item) {
            if ($callback($item, $key) === false) {
                break;
            }
        }

        return $this;
    }

    /**
     * Create a new collection consisting of every n-th element.
     *
     * @param  int  $step
     * @param  int  $offset
     * @return static
     */
    public function every($step, $offset = 0)
    {
        $new = [];

        $position = 0;

        foreach ($this->items as $item) {
            if ($position % $step === $offset) {
                $new[] = $item;
            }

            $position++;
        }

        return new static($new);
    }

    /**
     * Get all items except for those with the specified keys.
     *
     * @param  mixed  $keys
     * @return static
     */
    public function except($keys)
    {
        $keys = is_array($keys) ? $keys : func_get_args();

        return new static(Arr::except($this->items, $keys));
    }

    /**
     * Run a filter over each of the items.
     *
     * @param  callable|null  $callback
     * @return static
     */
    public function filter(callable $callback = null)
    {
        if ($callback) {
            $return = [];

            foreach ($this->items as $key => $value) {
                if ($callback($value, $key)) {
                    $return[$key] = $value;
                }
            }

            return new static($return);
        }

        return new static(array_filter($this->items));
    }

    /**
     * Filter items by the given key value pair.
     *
     * @param  string  $key
     * @param  mixed  $value
     * @param  bool  $strict
     * @return static
     */
    public function where($key, $value, $strict = true)
    {
        return $this->filter(function ($item) use ($key, $value, $strict) {
            return $strict ? Helper::dataGet($item, $key) === $value
                           : Helper::dataGet($item, $key) == $value;
        });
    }

    /**
     * Filter items by the given key value pair using loose comparison.
     *
     * @param  string  $key
     * @param  mixed  $value
     * @return static
     */
    public function whereLoose($key, $value)
    {
        return $this->where($key, $value, false);
    }

    /**
     * Filter items by the given key value pair.
     *
     * @param  string  $key
     * @param  array  $values
     * @param  bool  $strict
     * @return static
     */
    public function whereIn($key, array $values, $strict = true)
    {
        return $this->filter(function ($item) use ($key, $values, $strict) {
            return in_array(Helper::dataGet($item, $key), $values, $strict);
        });
    }

    /**
     * Filter items by the given key value pair using loose comparison.
     *
     * @param  string  $key
     * @param  array  $values
     * @return static
     */
    public function whereInLoose($key, array $values)
    {
        return $this->whereIn($key, $values, false);
    }

    /**
     * Get the first item from the collection.
     *
     * @param  callable|null  $callback
     * @param  mixed  $default
     * @return mixed
     */
    public function first(callable $callback = null, $default = null)
    {
        return Arr::first($this->items, $callback, $default);
    }

    /**
     * Get a flattened array of the items in the collection.
     *
     * @param  int  $depth
     * @return static
     */
    public function flatten($depth = INF)
    {
        return new static(Arr::flatten($this->items, $depth));
    }

    /**
     * Flip the items in the collection.
     *
     * @return static
     */
    public function flip()
    {
        return new static(array_flip($this->items));
    }

    /**
     * Remove an item from the collection by key.
     *
     * @param  string|array  $keys
     * @return $this
     */
    public function forget($keys)
    {
        foreach ((array) $keys as $key) {
            $this->offsetUnset($key);
        }

        return $this;
    }

    /**
     * Get an item from the collection by key.
     *
     * @param  mixed  $key
     * @param  mixed  $default
     * @return mixed
     */
    public function get($key, $default = null)
    {
        if ($this->offsetExists($key)) {
            return $this->items[$key];
        }

        return value($default);
    }

    /**
     * Group an associative array by a field or using a callback.
     *
     * @param  callable|string  $groupBy
     * @param  bool  $preserveKeys
     * @return static
     */
    public function groupBy($groupBy, $preserveKeys = false)
    {
        $groupBy = $this->valueRetriever($groupBy);

        $results = [];

        foreach ($this->items as $key => $value) {
            $groupKeys = $groupBy($value, $key);

            if (! is_array($groupKeys)) {
                $groupKeys = [$groupKeys];
            }

            foreach ($groupKeys as $groupKey) {
                if (! array_key_exists($groupKey, $results)) {
                    $results[$groupKey] = new static;
                }

                $results[$groupKey]->offsetSet($preserveKeys ? $key : null, $value);
            }
        }

        return new static($results);
    }

    /**
     * Key an associative array by a field or using a callback.
     *
     * @param  callable|string  $keyBy
     * @return static
     */
    public function keyBy($keyBy)
    {
        $keyBy = $this->valueRetriever($keyBy);

        $results = [];

        foreach ($this->items as $key => $item) {
            $results[$keyBy($item, $key)] = $item;
        }

        return new static($results);
    }

    /**
     * Determine if an item exists in the collection by key.
     *
     * @param  mixed  $key
     * @return bool
     */
    public function has($key)
    {
        return $this->offsetExists($key);
    }

    /**
     * Concatenate values of a given key as a string.
     *
     * @param  string  $value
     * @param  string  $glue
     * @return string
     */
    public function implode($value, $glue = null)
    {
        $first = $this->first();

        if (is_array($first) || is_object($first)) {
            return implode($glue, $this->pluck($value)->all());
        }

        return implode($value, $this->items);
    }

    /**
     * Intersect the collection with the given items.
     *
     * @param  mixed  $items
     * @return static
     */
    public function intersect($items)
    {
        return new static(array_intersect($this->items, $this->getArrayableItems($items)));
    }

    /**
     * Determine if the collection is empty or not.
     *
     * @return bool
     */
    public function isEmpty()
    {
        return empty($this->items);
    }

    /**
     * Determine if the given value is callable, but not a string.
     *
     * @param  mixed  $value
     * @return bool
     */
    protected function useAsCallable($value)
    {
        return ! is_string($value) && is_callable($value);
    }

    /**
     * Get the keys of the collection items.
     *
     * @return static
     */
    public function keys()
    {
        return new static(array_keys($this->items));
    }

    /**
     * Get the last item from the collection.
     *
     * @param  callable|null  $callback
     * @param  mixed  $default
     * @return mixed
     */
    public function last(callable $callback = null, $default = null)
    {
        return Arr::last($this->items, $callback, $default);
    }

    /**
     * Get the values of a given key.
     *
     * @param  string  $value
     * @param  string|null  $key
     * @return static
     */
    public function pluck($value, $key = null)
    {
        return new static(Arr::pluck($this->items, $value, $key));
    }

    /**
     * Alias for the "pluck" method.
     *
     * @param  string  $value
     * @param  string|null  $key
     * @return static
     *
     * @deprecated since version 5.2. Use the "pluck" method directly.
     */
    public function lists($value, $key = null)
    {
        return $this->pluck($value, $key);
    }

    /**
     * Run a map over each of the items.
     *
     * @param  callable  $callback
     * @return static
     */
    public function map(callable $callback)
    {
        $keys = array_keys($this->items);

        $items = array_map($callback, $this->items, $keys);

        return new static(array_combine($keys, $items));
    }

    /**
     * Map a collection and flatten the result by a single level.
     *
     * @param  callable  $callback
     * @return static
     */
    public function flatMap(callable $callback)
    {
        return $this->map($callback)->collapse();
    }

    /**
     * Get the max value of a given key.
     *
     * @param  string|null  $key
     * @return mixed
     */
    public function max($key = null)
    {
        return $this->reduce(function ($result, $item) use ($key) {
            $value = Helper::dataGet($item, $key);

            return is_null($result) || $value > $result ? $value : $result;
        });
    }

    /**
     * Merge the collection with the given items.
     *
     * @param  mixed  $items
     * @return static
     */
    public function merge($items)
    {
        return new static(array_merge($this->items, $this->getArrayableItems($items)));
    }

    /**
     * Create a collection by using this collection for keys and another for its values.
     *
     * @param  mixed  $values
     * @return static
     */
    public function combine($values)
    {
        return new static(array_combine($this->all(), $this->getArrayableItems($values)));
    }

    /**
     * Union the collection with the given items.
     *
     * @param  mixed  $items
     * @return static
     */
    public function union($items)
    {
        return new static($this->items + $this->getArrayableItems($items));
    }

    /**
     * Get the min value of a given key.
     *
     * @param  string|null  $key
     * @return mixed
     */
    public function min($key = null)
    {
        return $this->reduce(function ($result, $item) use ($key) {
            $value = Helper::dataGet($item, $key);

            return is_null($result) || $value < $result ? $value : $result;
        });
    }

    /**
     * Get the items with the specified keys.
     *
     * @param  mixed  $keys
     * @return static
     */
    public function only($keys)
    {
        $keys = is_array($keys) ? $keys : func_get_args();

        return new static(Arr::only($this->items, $keys));
    }

    /**
     * "Paginate" the collection by slicing it into a smaller collection.
     *
     * @param  int  $page
     * @param  int  $perPage
     * @return static
     */
    public function forPage($page, $perPage)
    {
        return $this->slice(($page - 1) * $perPage, $perPage);
    }

    /**
     * Pass the collection to the given callback and return the result.
     *
     * @param  callable $callback
     * @return mixed
     */
    public function pipe(callable $callback)
    {
        return $callback($this);
    }

    /**
     * Get and remove the last item from the collection.
     *
     * @return mixed
     */
    public function pop()
    {
        return array_pop($this->items);
    }

    /**
     * Push an item onto the beginning of the collection.
     *
     * @param  mixed  $value
     * @param  mixed  $key
     * @return $this
     */
    public function prepend($value, $key = null)
    {
        $this->items = Arr::prepend($this->items, $value, $key);

        return $this;
    }

    /**
     * Push an item onto the end of the collection.
     *
     * @param  mixed  $value
     * @return $this
     */
    public function push($value)
    {
        $this->offsetSet(null, $value);

        return $this;
    }

    /**
     * Get and remove an item from the collection.
     *
     * @param  mixed  $key
     * @param  mixed  $default
     * @return mixed
     */
    public function pull($key, $default = null)
    {
        return Arr::pull($this->items, $key, $default);
    }

    /**
     * Put an item in the collection by key.
     *
     * @param  mixed  $key
     * @param  mixed  $value
     * @return $this
     */
    public function put($key, $value)
    {
        $this->offsetSet($key, $value);

        return $this;
    }

    /**
     * Get one or more items randomly from the collection.
     *
     * @param  int  $amount
     * @return mixed
     *
     * @throws \InvalidArgumentException
     */
    public function random($amount = 1)
    {
        if ($amount > ($count = $this->count())) {
            throw new InvalidArgumentException("You requested {$amount} items, but there are only {$count} items in the collection");
        }

        $keys = array_rand($this->items, $amount);

        if ($amount == 1) {
            return $this->items[$keys];
        }

        return new static(array_intersect_key($this->items, array_flip($keys)));
    }

    /**
     * Reduce the collection to a single value.
     *
     * @param  callable  $callback
     * @param  mixed     $initial
     * @return mixed
     */
    public function reduce(callable $callback, $initial = null)
    {
        return array_reduce($this->items, $callback, $initial);
    }

    /**
     * Create a collection of all elements that do not pass a given truth test.
     *
     * @param  callable|mixed  $callback
     * @return static
     */
    public function reject($callback)
    {
        if ($this->useAsCallable($callback)) {
            return $this->filter(function ($value, $key) use ($callback) {
                return ! $callback($value, $key);
            });
        }

        return $this->filter(function ($item) use ($callback) {
            return $item != $callback;
        });
    }

    /**
     * Reverse items order.
     *
     * @return static
     */
    public function reverse()
    {
        return new static(array_reverse($this->items, true));
    }

    /**
     * Search the collection for a given value and return the corresponding key if successful.
     *
     * @param  mixed  $value
     * @param  bool   $strict
     * @return mixed
     */
    public function search($value, $strict = false)
    {
        if (! $this->useAsCallable($value)) {
            return array_search($value, $this->items, $strict);
        }

        foreach ($this->items as $key => $item) {
            if (call_user_func($value, $item, $key)) {
                return $key;
            }
        }

        return false;
    }

    /**
     * Get and remove the first item from the collection.
     *
     * @return mixed
     */
    public function shift()
    {
        return array_shift($this->items);
    }

    /**
     * Shuffle the items in the collection.
     *
     * @param int $seed
     * @return static
     */
    public function shuffle($seed = null)
    {
        $items = $this->items;

        if (is_null($seed)) {
            shuffle($items);
        } else {
            srand($seed);

            usort($items, function () {
                return rand(-1, 1);
            });
        }

        return new static($items);
    }

    /**
     * Slice the underlying collection array.
     *
     * @param  int   $offset
     * @param  int   $length
     * @return static
     */
    public function slice($offset, $length = null)
    {
        return new static(array_slice($this->items, $offset, $length, true));
    }

    /**
     * Chunk the underlying collection array.
     *
     * @param  int   $size
     * @return static
     */
    public function chunk($size)
    {
        $chunks = [];

        foreach (array_chunk($this->items, $size, true) as $chunk) {
            $chunks[] = new static($chunk);
        }

        return new static($chunks);
    }

    /**
     * Sort through each item with a callback.
     *
     * @param  callable|null  $callback
     * @return static
     */
    public function sort(callable $callback = null)
    {
        $items = $this->items;

        $callback ? uasort($items, $callback) : uasort($items, function ($a, $b) {
            if ($a == $b) {
                return 0;
            }

            return ($a < $b) ? -1 : 1;
        });

        return new static($items);
    }

    /**
     * Sort the collection using the given callback.
     *
     * @param  callable|string  $callback
     * @param  int   $options
     * @param  bool  $descending
     * @return static
     */
    public function sortBy($callback, $options = SORT_REGULAR, $descending = false)
    {
        $results = [];

        $callback = $this->valueRetriever($callback);

        // First we will loop through the items and get the comparator from a callback
        // function which we were given. Then, we will sort the returned values and
        // and grab the corresponding values for the sorted keys from this array.
        foreach ($this->items as $key => $value) {
            $results[$key] = $callback($value, $key);
        }

        $descending ? arsort($results, $options)
                    : asort($results, $options);

        // Once we have sorted all of the keys in the array, we will loop through them
        // and grab the corresponding model so we can set the underlying items list
        // to the sorted version. Then we'll just return the collection instance.
        foreach (array_keys($results) as $key) {
            $results[$key] = $this->items[$key];
        }

        return new static($results);
    }

    /**
     * Sort the collection in descending order using the given callback.
     *
     * @param  callable|string  $callback
     * @param  int  $options
     * @return static
     */
    public function sortByDesc($callback, $options = SORT_REGULAR)
    {
        return $this->sortBy($callback, $options, true);
    }

    /**
     * Splice a portion of the underlying collection array.
     *
     * @param  int  $offset
     * @param  int|null  $length
     * @param  mixed  $replacement
     * @return static
     */
    public function splice($offset, $length = null, $replacement = [])
    {
        if (func_num_args() == 1) {
            return new static(array_splice($this->items, $offset));
        }

        return new static(array_splice($this->items, $offset, $length, $replacement));
    }

    /**
     * Get the sum of the given values.
     *
     * @param  callable|string|null  $callback
     * @return mixed
     */
    public function sum($callback = null)
    {
        if (is_null($callback)) {
            return array_sum($this->items);
        }

        $callback = $this->valueRetriever($callback);

        return $this->reduce(function ($result, $item) use ($callback) {
            return $result += $callback($item);
        }, 0);
    }

    /**
     * Take the first or last {$limit} items.
     *
     * @param  int  $limit
     * @return static
     */
    public function take($limit)
    {
        if ($limit < 0) {
            return $this->slice($limit, abs($limit));
        }

        return $this->slice(0, $limit);
    }

    /**
     * Transform each item in the collection using a callback.
     *
     * @param  callable  $callback
     * @return $this
     */
    public function transform(callable $callback)
    {
        $this->items = $this->map($callback)->all();

        return $this;
    }

    /**
     * Return only unique items from the collection array.
     *
     * @param  string|callable|null  $key
     * @return static
     */
    public function unique($key = null)
    {
        if (is_null($key)) {
            return new static(array_unique($this->items, SORT_REGULAR));
        }

        $key = $this->valueRetriever($key);

        $exists = [];

        return $this->reject(function ($item) use ($key, &$exists) {
            if (in_array($id = $key($item), $exists)) {
                return true;
            }

            $exists[] = $id;
        });
    }

    /**
     * Reset the keys on the underlying array.
     *
     * @return static
     */
    public function values()
    {
        return new static(array_values($this->items));
    }

    /**
     * Get a value retrieving callback.
     *
     * @param  string  $value
     * @return callable
     */
    protected function valueRetriever($value)
    {
        if ($this->useAsCallable($value)) {
            return $value;
        }

        return function ($item) use ($value) {
            return Helper::dataGet($item, $value);
        };
    }

    /**
     * Zip the collection together with one or more arrays.
     *
     * e.g. new Collection([1, 2, 3])->zip([4, 5, 6]);
     *      => [[1, 4], [2, 5], [3, 6]]
     *
     * @param  mixed ...$items
     * @return static
     */
    public function zip($items)
    {
        $arrayableItems = array_map(function ($items) {
            return $this->getArrayableItems($items);
        }, func_get_args());

        $params = array_merge([function () {
            return new static(func_get_args());
        }, $this->items], $arrayableItems);

        return new static(call_user_func_array('array_map', $params));
    }

    /**
     * Get the collection of items as a plain array.
     *
     * @return array
     */
    #[\ReturnTypeWillChange]
    public function toArray()
    {
        return array_map(function ($value) {
            return $value instanceof ArrayableInterface ? $value->toArray() : $value;
        }, $this->items);
    }

    /**
     * Convert the object into something JSON serializable.
     *
     * @return array
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        return array_map(function ($value) {
            if ($value instanceof JsonSerializable) {
                return $value->jsonSerialize();
            } elseif ($value instanceof JsonableInterface) {
                return json_decode($value->toJson(), true);
            } elseif ($value instanceof ArrayableInterface) {
                return $value->toArray();
            } else {
                return $value;
            }
        }, $this->items);
    }

    /**
     * Get the collection of items as JSON.
     *
     * @param  int  $options
     * @return string
     */
    public function toJson($options = 0)
    {
        return json_encode($this->jsonSerialize(), $options);
    }

    /**
     * Get an iterator for the items.
     *
     * @return \ArrayIterator
     */
    #[\ReturnTypeWillChange]
    public function getIterator()
    {
        return new ArrayIterator($this->items);
    }

    /**
     * Get a CachingIterator instance.
     *
     * @param  int  $flags
     * @return \CachingIterator
     */
    public function getCachingIterator($flags = CachingIterator::CALL_TOSTRING)
    {
        return new CachingIterator($this->getIterator(), $flags);
    }

    /**
     * Count the number of items in the collection.
     *
     * @return int
     */
    #[\ReturnTypeWillChange]
    public function count()
    {
        return count($this->items);
    }

    /**
     * Determine if an item exists at an offset.
     *
     * @param  mixed  $key
     * @return bool
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($key)
    {
        return array_key_exists($key, $this->items);
    }

    /**
     * Get an item at a given offset.
     *
     * @param  mixed  $key
     * @return mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($key)
    {
        return $this->items[$key];
    }

    /**
     * Set the item at a given offset.
     *
     * @param  mixed  $key
     * @param  mixed  $value
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetSet($key, $value)
    {
        if (is_null($key)) {
            $this->items[] = $value;
        } else {
            $this->items[$key] = $value;
        }
    }

    /**
     * Unset the item at a given offset.
     *
     * @param  string  $key
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetUnset($key)
    {
        unset($this->items[$key]);
    }

    /**
     * Convert the collection to its string representation.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->toJson();
    }

    /**
     * Results array of items from Collection or ArrayableInterface.
     *
     * @param  mixed  $items
     * @return array
     */
    protected function getArrayableItems($items)
    {
        if (is_array($items)) {
            return $items;
        } elseif ($items instanceof self) {
            return $items->all();
        } elseif ($items instanceof ArrayableInterface) {
            return $items->toArray();
        } elseif ($items instanceof JsonableInterface) {
            return json_decode($items->toJson(), true);
        } elseif ($items instanceof JsonSerializable) {
            return $items->jsonSerialize();
        } elseif ($items instanceof Traversable) {
            return iterator_to_array($items);
        }

        return (array) $items;
    }
}
