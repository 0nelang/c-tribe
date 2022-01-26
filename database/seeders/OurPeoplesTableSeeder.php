<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OurPeoplesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('our_peoples')->delete();
        
        \DB::table('our_peoples')->insert(array (
            0 => 
            array (
                'id' => 1,
                'photo' => 'people-photo/1642658238.jpg',
                'name' => 'ADHITYA ADJI DHARMA',
                'title' => 'CHIEF EXECUTIVE OFFICER',
                'description' => '<p style="-webkit-font-smoothing: antialiased; font-feature-settings: &quot;kern&quot;; font-kerning: normal; line-height: 1.5em; margin-bottom: 20px; cursor: none !important;">Through his background of graphic design, Adji has shaped his expertise in conceptual thinking and art directing. Specializing in branding and ideas, Adji contributes maximally to the team.</p><p style="-webkit-font-smoothing: antialiased; font-feature-settings: &quot;kern&quot;; font-kerning: normal; line-height: 1.5em; margin-bottom: 0px; cursor: none !important;">He executes the best perspectives and results for clients. Graduated from Raffles Design Institute in 2011, Adji’s passion on visual communications led him to become Creative Director. Adji is also the co-founder of Orbis, Vol Battleship and Bar, OTSS and 123.</p>',
                'created_at' => '2022-01-19 17:25:39',
                'updated_at' => '2022-01-20 06:57:18',
            ),
            1 => 
            array (
                'id' => 2,
                'photo' => 'people-photo/1642658277.jpg',
                'name' => 'NADIAN ALMATSIER',
                'title' => 'BUSINESS DIRECTOR',
                'description' => '<p style="-webkit-font-smoothing: antialiased; font-feature-settings: &quot;kern&quot;; font-kerning: normal; line-height: 1.5em; margin-bottom: 20px; cursor: none !important;">Creative communication and branding practitioner with more than 19 years experiences both in multinational and local agencies, and in mega scale national project with substantial mission to make meaningful contribution for the nation. Passionately provides a fairly complete knowledge and experience regarding communication approaches and strategies as well as hone a sharper and more dynamic creative point of view.</p><p style="-webkit-font-smoothing: antialiased; font-feature-settings: &quot;kern&quot;; font-kerning: normal; line-height: 1.5em; margin-bottom: 0px; cursor: none !important;">Branding is much more than what people see, it’s about how you make people feel. Relevancy is the key.﻿</p>',
                'created_at' => '2022-01-19 17:26:57',
                'updated_at' => '2022-01-20 06:57:57',
            ),
            2 => 
            array (
                'id' => 3,
                'photo' => 'people-photo/1642658266.jpg',
                'name' => 'IMAN SADEQH',
                'title' => 'ACCOUNT DIRECTOR & HEAD PLANNER',
                'description' => '<p style="-webkit-font-smoothing: antialiased; font-feature-settings: &quot;kern&quot;; font-kerning: normal; line-height: 1.5em; margin-bottom: 20px; cursor: none !important;">Odeq, was born and made by the strong influence of the Indonesia Urban Street Culture scene, which made him a strong persona that showed by everything he loves, from music, fashion, art &amp; hobbies.</p><p style="-webkit-font-smoothing: antialiased; font-feature-settings: &quot;kern&quot;; font-kerning: normal; line-height: 1.5em; margin-bottom: 20px; cursor: none !important;">Falling in love with advertising, Odeq started his career in 2010, where he then strengthens his personal skills as an account that has a sharp analysis of human behaviour insight, especially in Indonesian youths &amp; urban culture related.</p><p style="-webkit-font-smoothing: antialiased; font-feature-settings: &quot;kern&quot;; font-kerning: normal; line-height: 1.5em; margin-bottom: 20px; cursor: none !important;">This had led him to become a Strategic Planner before switching him back to his roots as an Associate account director at a multinational agency.</p><p style="-webkit-font-smoothing: antialiased; font-feature-settings: &quot;kern&quot;; font-kerning: normal; line-height: 1.5em; margin-bottom: 20px; cursor: none !important;">His hunger for something new and the love of the urban culture is the thing that aligns with C.TRIBE belief and purpose.</p><p style="-webkit-font-smoothing: antialiased; font-feature-settings: &quot;kern&quot;; font-kerning: normal; line-height: 1.5em; margin-bottom: 0px; cursor: none !important;">Not just to discover new trends &amp; behaviour, but to also strengthen its relevance by give birth to a meaningful stories &amp; purpose to the society.</p>',
                'created_at' => '2022-01-19 17:27:47',
                'updated_at' => '2022-01-20 06:57:46',
            ),
            3 => 
            array (
                'id' => 4,
                'photo' => 'people-photo/1642658292.jpg',
                'name' => 'IRZA FAUZAN AHMAD AMIN',
                'title' => 'CREATIVE DIRECTOR',
                'description' => '<p>Irza Fauzan a.k.a Abank is an ideas hunter and creative thinker. Hard working person with a high sense of responsibility and motivation For many years working, giving breath to brands and create story in them. So that the brand can speak appropriately to its consumers.</p><p>Starting his journey as copywriter, having strayed in the magazines media company, he finally found the best way to forge himself and learning to bring out the best when he worked in several local and multinational agencies by handling big clients and creating effective campaigns for them. Not only that, several of his works were awarded with “metal” at the Citra Pariwara advertising festival for the brand such as AXIS, Indomie and also Indofood Racik seasoning.</p><p>Interest for music, fashion, culture, trends and also sports especially running has made him a creative with wide references. Passionate and have never ending interest in learning something new. He also believe collaborative effort can create amazing works.</p><p>And with C.TRIBE’s his ready to create even something wild, big and different.</p>',
                'created_at' => '2022-01-19 17:28:36',
                'updated_at' => '2022-01-21 00:40:43',
            ),
        ));
        
        
    }
}