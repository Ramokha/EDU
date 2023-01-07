<?php

class Task
{
    private string $description;
    private $dataCreated;
    private $dateUpdated;
    private $dateDone;
    private int $priority = 1;
    private bool $isDone = false;
    private User $user;
    public TaskService $taskService;
    public string $name;

    function __construct(User $user)
    {
        $this->user = $user;
        $this->name = $user->name;
        $this->dataCreated = new DateTime();
        $this->description = $user->description;
        $this->info($this->user);
        $this->addComment('asdfafaf');
    }

    function setDescription(string $newDescription)
    {
        $this->description = $newDescription;
        $this->dateUpdated = new DateTime();
    }

    function getDescription(): string
    {
        return $this->description;
    }

    function markAsDone(){
        $this->dateUpdated = new DateTime();
        $this->isDone = true;
        $this->dateDone = new DateTime();
        echo "Задача выполнена";
    }

    function getDataCreated()
    {
        return $this->dataCreated;
    }

    function info($user)
    {
        echo "Пользователь $user->name запланировал на сегодня $this->description, что займет {$user->time}ч";
    }

    function addComment($text)
    {
        TaskService::addComment($this->name, $this, $text);
    }
}

class User 
{
    public string $name;
    public ?int $time;
    public string $description;
    public Task $task;
    
    function __construct(string $name, int $time, string $description)
    {
        $this->name = $name;
        $this->time = $time;
        $this->description = $description;
        $this->task = new Task($this);
    }

    function getName(): string
    {
        return $this->name;
    }
    function setname(string $name)
    {
        $this->name = $name;
    }
    function getTime(): int
    {
        return $this->time;
    }
    function setTime(int $time)
    {
        $this->time = $time;
    }
}

class Comment
{
    public User $author;
    public Task $task;
    public string $text;

    function __construct(User $author, Task $task, $text)
    {
        $this->author = $author;
        $this->task = $task;
        $this->text = $text;
    }
}

class TaskService
{
    static function addComment(User $user, Task $task, $text)
    {
        return $comment = new Comment($user, $task, $text);
    }
}

$user = new User(readline('Введите имя' . PHP_EOL), readline('Введите требующееся количество времени' . PHP_EOL), readline('Введите описание задачи' . PHP_EOL));
