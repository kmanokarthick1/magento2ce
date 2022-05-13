<?php
namespace Pulsestorm\fullmodulee\Api;

use Pulsestorm\fullmodulee\Api\Data\blogInterface;
use Magento\Framework\Api\SearchCriteriaInterface;

/**
 * Interface blogRepositoryInterface
 *
 * @api
 */
interface blogRepositoryInterface
{
    /**
     * Create or update a blog.
     *
     * @param blogInterface $page
     * @return blogInterface
     */
    public function save(blogInterface $page);

    /**
     * Get a blog by Id
     *
     * @param int $id
     * @return blogInterface
     * @throws \Magento\Framework\Exception\NoSuchEntityException If blog with the specified ID does not exist.
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getById($id);

    /**
     * Retrieve blogs which match a specified criteria.
     *
     * @param SearchCriteriaInterface $criteria
     */
    public function getList(SearchCriteriaInterface $criteria);

    /**
     * Delete a blog
     *
     * @param blogInterface $page
     * @return blogInterface
     * @throws \Magento\Framework\Exception\NoSuchEntityException If blog with the specified ID does not exist.
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function delete(blogInterface $page);

    /**
     * Delete a blog by Id
     *
     * @param int $id
     * @return blogInterface
     * @throws \Magento\Framework\Exception\NoSuchEntityException If customer with the specified ID does not exist.
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function deleteById($id);
}
