<?php

namespace Tests\Unit;

use Tests\TestCase; // Use Laravel's TestCase for database testing
use App\Models\Job;
use App\Models\Employer;
use Illuminate\Foundation\Testing\RefreshDatabase;

class JobTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test that a Job belongs to an Employer.
     */
    public function test_job_belongs_to_an_employer(): void
    {
        // Arrange: Create an Employer and a Job
        $employer = Employer::factory()->create();
        $job = Job::factory()->create(['employer_id' => $employer->id]);

        // Act & Assert: Check the relationship
        $this->assertTrue($job->employer->is($employer), 'The job is not associated with the expected employer.');
    }

    public function test_can_have_tags(): void
    {
        // Arrange: Create an Employer and a Job
        $job = Job::factory()->create();
        $job->tag('Frontend');


        // Act & Assert: Check the relationship
        $this->assertCount(1, $job->tags, 'The job does not have the expected number of tags.');
    }
}