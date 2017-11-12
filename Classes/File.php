<?php

/**
 * Created by PhpStorm.
 *
 * File
 */
class File extends Entity
{
    public $type;

    public function __construct($location)
    {
        parent::__construct($location);

        $data = pathinfo($this->path);
        $this->name = $data['filename'];
        $this->type = strtolower($data['extension']);
    }

    /**
     * Display short file info
     */
    public function showTeaser()
    {
        echo '<div><i class="uk-icon-file"></i> ' . $this->name . '</div>';
    }

    /**
     * Display file content
     */
    public function showContent()
    {
        // TODO: Implement showContent() method.
    }
}