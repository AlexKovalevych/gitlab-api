<?php

namespace GitlabApi\Query;

abstract class AbstractQueryBuilder
{
    /**
     * @return string
     */
    public function __toString()
    {
        foreach (get_object_vars($this) as $field => $value) {
            if (!$value) {
                continue;
            }
            if (is_array($value)) {
                $parameters[] = sprintf('%s=%s', $field, implode(',', $value));
            } else {
                $parameters[] = sprintf('%s=%s', $field, $value);
            }
        }

        return implode('&', $parameters);
    }
}
