<?php
/**
 * Created by PhpStorm.
 * User: joey
 * Date: 2/29/2016
 * Time: 12:20 PM
 */

namespace NovakSolutions\FrontDesk;

//See: http://php.net/manual/en/class.iterator.php for details on how Iterator works...
/**
 * Class ResultSet
 * @property QueryBuilder $queryBuilder
 * @package NovakSolutions\FrontDesk
 */

class ResultSet implements \Iterator{
    public $queryBuilder = null;
    public $results = null;
    public $lastKey = null;
    public $filtersAsString = null;
    public $perPage = 500;
    public $currentPage = 0;
    public $currentIndex = 0;

    public function __construct(QueryBuilder $queryBuilder){
        $this->queryBuilder = $queryBuilder;
    }

    public function current(){
        if($this->results === null){
            $this->loadResultsForCurrentPage();
        }

        return $this->results[$this->currentIndex];
    }

    public function key(){
        return $this->currentPage * $this->perPage + $this->currentIndex + 1;
    }

    public function next(){
        $this->currentIndex++;
        if($this->currentIndex >= count($this->results)){
            $this->currentIndex == 0;
            $this->currentPage++;
            $this->loadResultsForCurrentPage();
        }
    }

    public function rewind(){
        $this->currentIndex = 0;

        if($this->currentPage > 0){
            $this->currentPage = 0;
            $this->loadResultsForCurrentPage();
        } else {
            //PHP Calls "rewind, valid, current, next...  So for valid to pass, the results field must already be populated...  So we do that here.
            if($this->results === null){
                $this->loadResultsForCurrentPage();
            }
        }
    }


    public function valid(){
        return isset($this->results[$this->currentIndex]);
    }

    public function loadResultsForCurrentPage(){
        FrontDesk::select($this);
    }
} 