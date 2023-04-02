<?php

declare(strict_types=1);

namespace App\Tests\Unit;

use App\Entity\Post\Thumbnail;
use PHPUnit\Framework\TestCase;

class ThumbnailTest extends TestCase
{
    final public function testIsTrue(): void
    {
        $thumbnail = new Thumbnail();
        $createdAt = new \DateTimeImmutable();
        $updatedAt = new \DateTimeImmutable();

        $thumbnail->setImageName('url_image')
            ->setImageSize(20)
            ->setCreatedAt($createdAt)
            ->setUpdatedAt($updatedAt);

        $this->assertTrue('url_image' === $thumbnail->getImageName());
        $this->assertTrue(20 === $thumbnail->getImageSize());
        $this->assertTrue($thumbnail->getCreatedAt() === $createdAt);
        $this->assertTrue($thumbnail->getUpdatedAt() === $updatedAt);
    }

    final public function testIsFalse(): void
    {
        $thumbnail = new Thumbnail();
        $createdAt = new \DateTimeImmutable();
        $updatedAt = new \DateTimeImmutable();

        $thumbnail->setImageName('url_image')
            ->setImageSize(20)
            ->setCreatedAt($createdAt)
            ->setUpdatedAt($updatedAt);

        $this->assertFalse('url_image-false' === $thumbnail->getImageName());
        $this->assertFalse(30 === $thumbnail->getImageSize());
        $this->assertFalse($thumbnail->getCreatedAt() === new \DateTimeImmutable());
        $this->assertFalse($thumbnail->getUpdatedAt() === new \DateTimeImmutable());
    }

    final public function testIsEmpty(): void
    {
        $thumbnail = new Thumbnail();

        $this->assertEmpty($thumbnail->getId());
        $this->assertEmpty($thumbnail->getImageName());
        $this->assertEmpty($thumbnail->getImageSize());
    }

    final public function testIsNotEmpty(): void
    {
        $thumbnail = new Thumbnail();
        $createdAt = new \DateTimeImmutable();
        $updatedAt = new \DateTimeImmutable();

        $thumbnail->setImageName('url_image')
            ->setImageSize(20)
            ->setCreatedAt($createdAt)
            ->setUpdatedAt($updatedAt);

        $this->assertNotEmpty($thumbnail->getImageName());
        $this->assertNotEmpty($thumbnail->getImageSize());
        $this->assertNotEmpty($thumbnail->getCreatedAt());
        $this->assertNotEmpty($thumbnail->getUpdatedAt());
    }
}
