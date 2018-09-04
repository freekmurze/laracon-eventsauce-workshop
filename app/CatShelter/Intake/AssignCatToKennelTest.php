<?php

namespace App\CatShelter\Intake;

use App\CatShelter\Kennel;

class AssignCatToKennelTest extends IntakeProcessTestCase
{
    /**
     * @test
     */
    public function registering_the_tag_of_a_cat()
    {
        $this->when(new AssignCatToKennel(
            $this->aggregateRootId(),
            $kennel = Kennel::AVAILABLE_PLACES[0]
        ))->then(
            new CatWasAssignedToKennel(
                $kennel
            ));
    }
}