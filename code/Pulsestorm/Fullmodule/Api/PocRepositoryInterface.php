<?php
namespace Pulsestorm\Fullmodule\Api;

use Pulsestorm\Fullmodule\Api\Data\PocInterface;
use Magento\Framework\Api\SearchCriteriaInterface;

/**
 * Interface PocRepositoryInterface
 *
 * @api
 */
interface PocRepositoryInterface
{
    /**
     * Create or update a Poc.
     *
     * @param PocInterface $page
     * @return PocInterface
     */
    public function save(PocInterface $page);

    /**
     * Get a Poc by Id
     *
     * @param int $id
     * @return PocInterface
     * @throws \Magento\Framework\Exception\NoSuchEntityException If Poc with the specified ID does not exist.
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getById($id);

    /**
     * Retrieve Pocs which match a specified criteria.
     *
     * @param SearchCriteriaInterface $criteria
     */
    public function getList(SearchCriteriaInterface $criteria);

    /**
     * Delete a Poc
     *
     * @param PocInterface $page
     * @return PocInterface
     * @throws \Magento\Framework\Exception\NoSuchEntityException If Poc with the specified ID does not exist.
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function delete(PocInterface $page);

    /**
     * Delete a Poc by Id
     *
     * @param int $id
     * @return PocInterface
     * @throws \Magento\Framework\Exception\NoSuchEntityException If customer with the specified ID does not exist.
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function deleteById($id);
}
