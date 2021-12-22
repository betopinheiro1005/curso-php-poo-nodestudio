<?php

interface Crud {
    public function create();
    public function read();
    public function update($data);
    public function delete();
}
