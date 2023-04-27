<?php

namespace Illuminate\View\Compilers\Concerns;

trait CompilesStrings
{
    /**
     * Compile the stack statements into the content.
     *
     * @param  string  $value
     * @param  int  $limit
     * @param  string  $end
     * @return string
     */
    protected function compileLimit($value, $limit = 100, $end = '...')
    {
        return "<?php echo str($value)->limit($limit, $end); ?>";
    }
}
