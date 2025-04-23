<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\riasec;
use App\Models\Question;
use App\Models\RiasecQuestion;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        //RIASEC Codes
        $r = riasec::create(['name' => 'Realistic', 'description' => 'Realistic types, or “The Doers”, are assertive and competitive. They are practical problem solvers and like to work with their hands. They have many strengths in the workplace and will thrive exceptionally well in certain career paths.']);
        $i = riasec::create(['name' => 'Investigative', 'description' => 'Investigative types, or otherwise known as “The Thinkers” work best with data. They tend to be action-oriented and want to understand information, rather than persuade others. They have many strengths and will thrive in the right career.']);
        $a = riasec::create(['name' => 'Artistic', 'description' => 'Artistic types, or otherwise known as “The Creators” work with ideas and things. They tend to be uniquely creative, perceptive and original. At work, they have many unique strengths.']);
        $s = riasec::create(['name' => 'Social', 'description' => 'Social types, or otherwise known as “The Helpers”, tend to be empathetic and thoughtful. They are drawn to others and seek close relationships with them.']);
        $e = riasec::create(['name' => 'Enterprising', 'description' => 'Enterprising types, or otherwise known as “The Persuaders” work best with people and data. They tend to be adventurous, energetic and confident and are often found socializing with others.']);
        $c = riasec::create(['name' => 'Coventional', 'description' => 'Conventional types, or otherwise known as “The Organizer” like structure, rules and regulations and they tend to work best with data.']);

        //Realistic Questions
        $realisticQuestions = ["I like cars and motorcycles",
                               "I enjoy fixing things with my hands",
                               "I prefer outdoor work over desk jobs",
                               "I feel comfortable using tools or machinery",
                               "I enjoy building or assembling things",
                               "I like woking on car engines or mechanical tasks",
                               "I enjoy physical labor and being active",
                               "I like working with plants and animals",
                               "I enjoy doing hands-on projects",
                               "I like solving problems by doing, not thinking"];
            
        foreach($realisticQuestions as $question){
            $q = Question::create(['question' => $question]);
            RiasecQuestion::create(['riasecs' => $r->id, 'questions' => $q->id]);
        }


        //Investigative Questions
        $investigativeQuestions = ["I like solving math problems",
                                   "I enjoy ffiguring out how things work",
                                   "I am curious about science and technology",
                                   "I like researching and discovering new information",
                                   "I enjoy thinking through complex ideas",
                                   "I like analyzing data or patterns",
                                   "I enjoy asking questions to understand things more",  
                                   "I like experimenting scientifically to see what can happen",
                                   "I enjoy reading about new inventions",
                                   "I like working on logical puzzles or riddles"];

        foreach($investigativeQuestions as $question){
            $q = Question::create(['question' => $question]);
            RiasecQuestion::create(['riasecs' => $i->id, 'questions' => $q->id]);
        }

        //Artistic Questions
        $artisticQuestions = ["I enjoy to paint or draw",
                              "I enjoy writing stories, poems, or music",
                              "I like expressing myself creatively",
                              "I enjoy designing things in my own style",
                              "I like experimenting with colors and shapes",
                              "I enjoy activities that allow freedom and imagination",
                              "I like photography or video editing",
                              "I enjoy creating things without strict rules",
                              "I like making crafts or visual art",
                              "I enjoy performing in front of others (music, dance, theater)"];

        foreach($artisticQuestions as $question){
            $q = Question::create(['question' => $question]);
            RiasecQuestion::create(['riasecs' => $a->id, 'questions' => $q->id]);
        }
       
        //Social Questions
        $socialQuestions = ["I like working with others as a team",
        "I enjoy helping people solve problems",
        "I like teaching or tutoring others",
        "I enjoy talking with others about their feelings",
        "I like volunteering in my community",
        "I enjoy listening and offering support",
        "I like planing activities for a group",
        "I enjoy sharing knowledge or advice",
        "I like being part of social events",
        "I enjoy mentoring or guiding others"];

        foreach($socialQuestions as $question){
            $q = Question::create(['question' => $question]);
            RiasecQuestion::create(['riasecs' => $s->id, 'questions' => $q->id]);
        }

        //Enterprising Questions
        $enterprisingQuestions = ["I like making speeches or presentations",
                                  "I enjoy leading group activities",
                                  "I like convincing others to see my point",
                                  "I enjoy planning and launching new ideas",
                                  "I like taking charge in situations",
                                  "I enjoy discussing business or sales ideas",
                                  "I like talking to people to build connections",
                                  "I enjoy competing and meeting goals",
                                  "I like making decisions that affect a group",
                                  "I enjoy creating plans to achieve success"];

        foreach($enterprisingQuestions as $question){
            $q = Question::create(['question' => $question]);
            RiasecQuestion::create(['riasecs' => $e->id, 'questions' => $q->id]);
        }

        //Conventional Questions
        $conventioalQuestions =["I like to keep my work organized",
                                "I enjoy following routines and procedures",
                                "I like sorting and arranging data",
                                "I enjoy checking things for accuracy",
                                "I like making schedules or to-do lists",
                                "I enjoy working with spreadsheets or records",
                                "I like organizing files and documents",
                                "I enjoy keeping things neat and in order",
                                "I like entering data and keeping track of it",
                                "I enjoy following clear instructuons or rules"];

        foreach($conventioalQuestions as $question){
            $q = Question::create(['question' => $question]);
            RiasecQuestion::create(['riasecs' => $c->id, 'questions' => $q->id]);
        }

    }
}
