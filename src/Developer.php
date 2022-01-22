<?php declare(strict_types = 1);

namespace Khuram;

class Developer
{
    private string $name;
    private string $experience;
    private string $profession;

    public function __construct(
        string $name='Khuram',
        string $profession='Full Stack Developer',
        string $experience='6 years'
    ) {
        $this->name = $name;
        $this->profession = $profession;
        $this->experience = $experience;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getProfession(): string
    {
        return $this->profession;
    }

    public function setProfession(string $profession)
    {
        $this->profession = $profession;
    }

    public function getExperience(): string
    {
        return $this->experience;
    }

    public function setExperience(string $experience)
    {
        $this->experience = $experience;
    }
    
    public function getInfo(): string
    {
        return "$this->name is a $this->profession with $this->experience of experience.";
    }
}
