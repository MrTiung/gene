<?php

/**
 * Created by PhpStorm.
 * User: zpldsg
 * Date: 2017/8/10
 * Time: 11:42
 */
class Snp
{
    private $rsid;
    private $chromosome;
    private $position;
    private $genotype;

    /**
     * @return mixed
     */
    public function getRsid()
    {
        return $this->rsid;
    }

    /**
     * @param mixed $rsid
     */
    public function setRsid($rsid)
    {
        $this->rsid = $rsid;
    }

    /**
     * @return mixed
     */
    public function getChromosome()
    {
        return $this->chromosome;
    }

    /**
     * @param mixed $chromosome
     */
    public function setChromosome($chromosome)
    {
        $this->chromosome = $chromosome;
    }

    /**
     * @return mixed
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @param mixed $position
     */
    public function setPosition($position)
    {
        $this->position = $position;
    }

    /**
     * @return mixed
     */
    public function getGenotype()
    {
        return $this->genotype;
    }

    /**
     * @param mixed $genotype
     */
    public function setGenotype($genotype)
    {
        $this->genotype = $genotype;
    }

    public function toStrLine(){
        $genotype=$this->getChromosome()=='Y'?substr($this->genotype,0,1):$this->genotype;
        return $this->getRsid()."\t".$this->getChromosome()."\t".$this->getPosition()."\t".$genotype;
    }
}