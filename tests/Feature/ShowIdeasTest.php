<?php

use App\Models\Idea;
use Illuminate\Foundation\Testing\RefreshDatabase;

it('shows multiple ideas', function () {
    $ideaOne = Idea::factory()->create([
        'title' => 'My First Idea',	
        'description' => 'Description of First Idea',	
    ]);
    

    $ideaTwo = Idea::factory()->create([
        'title' => 'My Second Idea',	
        'description' => 'Description of Second Idea',	
    ]);

    $response = $this->get(route('idea.index'));

    $response->assertOk();
    $response->assertSee($ideaOne->title);
    $response->assertSee($ideaOne->description);
    $response->assertSee($ideaTwo->title);
    $response->assertSee($ideaTwo->description);
});

it('shows a single idea', function () {
    $idea = Idea::factory()->create([
        'title' => 'My First Idea',	
        'description' => 'Description of First Idea',	
    ]);
    

    $response = $this->get(route('idea.show', $idea));

    $response->assertOk();
    $response->assertSee($idea->title);
    $response->assertSee($idea->description);
});

it('paginates ideas correctly', function () {
    Idea::factory(Idea::PAGINATION_COUNT + 1)->create();

    $ideaOne = Idea::find(1);
    $ideaOne->title = 'My First Idea';
    $ideaOne->save();

    $ideaEleven = Idea::find(Idea::PAGINATION_COUNT + 1);
    $ideaEleven->title = 'My Eleventh Idea';
    $ideaEleven->save();

    $response = $this->get('/');

    $response->assertSee($ideaOne->title);
    $response->assertDontSee($ideaEleven->title);

    $response = $this->get('/?page=2');

    $response->assertSee($ideaEleven->title);
    $response->assertDontSee($ideaOne->title);

});

it('ensures that two ideas with the same title will have different slugs', function () {
    $ideaOne = Idea::factory()->create([
        'title' => 'My First Idea',	
    ]);
    

    $ideaTwo = Idea::factory()->create([
        'title' => 'My First Idea',	
    ]);

    $response = $this->get(route('idea.show', $ideaOne));
    $response->assertOk();
    $this->assertTrue(request()->path() === 'ideas/my-first-idea');

    
    $response = $this->get(route('idea.show', $ideaTwo));
    $response->assertOk();
    $this->assertTrue(request()->path() === 'ideas/my-first-idea-1');
});