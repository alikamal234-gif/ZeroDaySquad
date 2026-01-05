<?php

class User
{
    protected int $id;
    protected string $name;
    protected string $email;
    protected string $password;
    protected string $role;

    public function __construct(
        int $id,
        string $name,
        string $email,
        string $password,
        string $role
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        $this->role = $role;
    }

    public function getId(): int { return $this->id; }
    public function getName(): string { return $this->name; }
    public function getEmail(): string { return $this->email; }
    public function getPassword(): string { return $this->password; }
    public function getRole(): string { return $this->role; }

    public function setName(string $name): void { $this->name = $name; }
    public function setEmail(string $email): void { $this->email = $email; }
    public function setPassword(string $password): void { $this->password = $password; }
    public function setRole(string $role): void { $this->role = $role; }
}


class Tester
{
    private int $id;
    private int $projectId;

    public function __construct(int $id, int $projectId)
    {
        $this->id = $id;
        $this->projectId = $projectId;
    }

    public function getId(): int { return $this->id; }
    public function getProjectId(): int { return $this->projectId; }

    public function setProjectId(int $projectId): void
    {
        $this->projectId = $projectId;
    }
}


class Project
{
    private int $id;
    private string $name;
    private string $address;
    private string $photoAddress;
    private string $description;
    private int $ownerId;

    public function __construct(
        int $id,
        string $name,
        string $address,
        string $photoAddress,
        string $description,
        int $ownerId
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->address = $address;
        $this->photoAddress = $photoAddress;
        $this->description = $description;
        $this->ownerId = $ownerId;
    }

    public function getId(): int { return $this->id; }
    public function getName(): string { return $this->name; }
    public function getAddress(): string { return $this->address; }
    public function getPhotoAddress(): string { return $this->photoAddress; }
    public function getDescription(): string { return $this->description; }
    public function getOwnerId(): int { return $this->ownerId; }

    public function setName(string $name): void { $this->name = $name; }
    public function setAddress(string $address): void { $this->address = $address; }
    public function setPhotoAddress(string $photo): void { $this->photoAddress = $photo; }
    public function setDescription(string $description): void { $this->description = $description; }
}


class Report
{
    private int $id;
    private int $testerId;
    private int $projectId;
    private string $issue;
    private string $description;
    private string $createdAt;

    public function __construct(
        int $id,
        int $testerId,
        int $projectId,
        string $issue,
        string $description,
        string $createdAt
    ) {
        $this->id = $id;
        $this->testerId = $testerId;
        $this->projectId = $projectId;
        $this->issue = $issue;
        $this->description = $description;
        $this->createdAt = $createdAt;
    }

    public function getId(): int { return $this->id; }
    public function getTesterId(): int { return $this->testerId; }
    public function getProjectId(): int { return $this->projectId; }
    public function getIssue(): string { return $this->issue; }
    public function getDescription(): string { return $this->description; }
    public function getCreatedAt(): string { return $this->createdAt; }
}


class Course
{
    private int $id;
    private string $courseAddress;
    private string $name;
    private string $description;
    private string $imageAddress;
    private string $price;

    public function __construct(
        int $id,
        string $courseAddress,
        string $name,
        string $description,
        string $imageAddress,
        string $price
    ) {
        $this->id = $id;
        $this->courseAddress = $courseAddress;
        $this->name = $name;
        $this->description = $description;
        $this->imageAddress = $imageAddress;
        $this->price = $price;
    }

    public function getId(): int { return $this->id; }
    public function getCourseAddress(): string { return $this->courseAddress; }
    public function getName(): string { return $this->name; }
    public function getDescription(): string { return $this->description; }
    public function getImageAddress(): string { return $this->imageAddress; }
    public function getPrice(): string { return $this->price; }
}

