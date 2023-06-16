<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TeamMembers;

class TeamMembersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $teamMembers = [
            ['name' => 'Raffaele',
            'surname' => 'Capaldo',
            'title' => 'Debugger',
            'photo' => 'https://ca.slack-edge.com/T91QPE3BP-U04LJJ2ASAG-e41cd37aac45-512'
            ] //aggiungetevi
        ];

        foreach ($teamMembers as $teamMember) {
            $newMemb = new TeamMembers();
            $newMemb->fill($teamMember);
            $newMemb->save();
        }
    }
}
