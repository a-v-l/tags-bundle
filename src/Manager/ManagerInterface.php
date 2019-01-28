<?php

declare(strict_types=1);

/*
 * Tags Bundle for Contao Open Source CMS.
 *
 * @copyright  Copyright (c) 2017, Codefog
 * @author     Codefog <https://codefog.pl>
 * @license    MIT
 */

namespace Codefog\TagsBundle\Manager;

use Codefog\TagsBundle\Tag;

interface ManagerInterface
{
    /**
     * Find the tag by value.
     *
     * @param string $value
     * @param array  $criteria
     *
     * @return Tag|null
     */
    public function find(string $value, array $criteria = []): ?Tag;

    /**
     * Find the multiple tags.
     *
     * @param array $criteria
     *
     * @return array
     */
    public function findMultiple(array $criteria = []): array;

    /**
     * Count the source records.
     *
     * @param Tag $tag
     *
     * @return int
     */
    public function countSourceRecords(Tag $tag): int;

    /**
     * Get the source records.
     *
     * @param Tag $tag
     *
     * @return array
     */
    public function getSourceRecords(Tag $tag): array;
}
