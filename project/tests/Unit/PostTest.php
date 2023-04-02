<?php

declare(strict_types=1);

namespace App\tests\Unit;

use App\Entity\Post\Post;
use PHPUnit\Framework\TestCase;

class PostTest extends TestCase
{
    final public function testIsTrue(): void
    {
        $post = new Post();
        $createdAt = new \DateTimeImmutable();
        $updatedAt = new \DateTimeImmutable();

        $post->setTitle('title')
            ->setSlug('slug')
            ->setContent('content')
            ->setState('STATE_DRAFT')
            ->setCreatedAt($createdAt)
            ->setUpdatedAt($updatedAt)
        ;

        $this->assertTrue('title' === $post->getTitle());
        $this->assertTrue('slug' === $post->getSlug());
        $this->assertTrue('content' === $post->getContent());
        $this->assertTrue('STATE_DRAFT' === $post->getState());
        $this->assertTrue($post->getCreatedAt() === $createdAt);
        $this->assertTrue($post->getUpdatedAt() === $updatedAt);
    }

    final public function testIsFalse(): void
    {
        $post = new Post();
        $createdAt = new \DateTimeImmutable();
        $updatedAt = new \DateTimeImmutable();

        $post->setTitle('title')
            ->setSlug('slug')
            ->setContent('content')
            ->setState('STATE_DRAFT')
            ->setCreatedAt($createdAt)
            ->setUpdatedAt($updatedAt)
        ;

        $this->assertFalse('false title' === $post->getTitle());
        $this->assertFalse('false slug' === $post->getSlug());
        $this->assertFalse('false content' === $post->getContent());
        $this->assertFalse('STATE_PUBLISHED' === $post->getState());
        $this->assertFalse($post->getCreatedAt() === new \DateTimeImmutable());
        $this->assertFalse($post->getUpdatedAt() === new \DateTimeImmutable());
    }

    final public function testIsEmpty(): void
    {
        $post = new Post();

        $this->assertEmpty($post->getId());
    }

    final public function testIsNotEmpty(): void
    {
        $post = new Post();
        $createdAt = new \DateTimeImmutable();
        $updatedAt = new \DateTimeImmutable();

        $post->setTitle('title')
            ->setSlug('slug')
            ->setContent('content')
            ->setState('STATE_DRAFT')
            ->setCreatedAt($createdAt)
            ->setUpdatedAt($updatedAt)
        ;

        $this->assertNotEmpty($post->getTitle());
        $this->assertNotEmpty($post->getSlug());
        $this->assertNotEmpty($post->getContent());
        $this->assertNotEmpty($post->getState());
        $this->assertNotEmpty($post->getCreatedAt());
        $this->assertNotEmpty($post->getUpdatedAt());
    }
}
