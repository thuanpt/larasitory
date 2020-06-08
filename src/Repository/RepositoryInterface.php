<?php

namespace Larasitory\Repository;

interface RepositoryInterface
{
    /**
     * Get all data
     *
     * @return mixed
     */
    public function getAll();

    /**
     * Get one data
     *
     * @param integer|array $id ID
     *
     * @return mixed
     */
    public function find($id);

    /**
     * Create data
     *
     * @param array $attributes Attributes
     *
     * @return mixed
     */
    public function create(array $attributes);

    /**
     * Update data
     *
     * @param integer $id ID
     * @param array $attributes Attributes
     *
     * @return mixed
     */
    public function update($id, array $attributes);

    /**
     * Get count
     *
     * @return mixed
     */
    public function count();

    /**
     * Save data
     *
     * @param array $data Recode
     *
     * @return mixed
     */
    public function store(array $data);

    /**
     * Create multiple
     *
     * @param array $data Recode data
     *
     * @return mixed
     */
    public function createMultiple(array $data);

    /**
     * Delete by id
     *
     * @param integer $id Identity of table
     *
     * @return mixed
     */
    public function deleteById($id);

    /**
     * Delete multiple by id
     *
     * @param array $ids Id
     *
     * @return mixed
     */
    public function deleteMultipleById(array $ids);

    /**
     * Get first column
     *
     * @param array $columns column name
     *
     * @return mixed
     */
    public function first(array $columns = ['*']);

    /**
     * Get all data
     *
     * @param array $columns column name
     *
     * @return mixed
     */
    public function get(array $columns = ['*']);

    /**
     * Get recode by id
     *
     * @param integer $id id
     * @param array $columns column
     *
     * @return mixed
     */
    public function getById($id, array $columns = ['*']);

    /**
     * Get one data or throw exception
     *
     * @param integer|array $id ID
     *
     * @return mixed
     */
    public function findOrFail($id);

    /**
     * Add a simple where clause to the query.
     *
     * @param string $column column
     * @param string $value value for column
     * @param string $operator operator
     *
     * @return mixed
     */
    public function where($column, $value, $operator = '=');
}
