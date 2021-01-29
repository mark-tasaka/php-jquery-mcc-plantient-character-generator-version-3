<?php

function getPhysicalMutationName($input)
{
    //Active Mutations 0-10
    //Passive Mutations 11-25
    $mutationName = array("Amplimorph", "Electrical Generation", "Extra Senses", "Gas Generation", "Holographic Skin", "Light Generation", "Metamorph", "Radiation Generation", "Regeneration", "Sonic Generation", "Symbiotic Touch", "Carapace", "Claws", "Heightened Agility", "Heightened Stamina", "Heightened Strength", "Increased Speed", "Infravision", "Multiple Body Parts", "New Body Parts", "Plasticity", "Shorter", "Spines", "Taller", "Ultravision","Wings");

    return $mutationName[$input];
}

function getPhyicalMutationType($input)
{
    if($input <= 10)
    {
        $type = "Active";
    }
    else
    {
        $type = "Passive";
    }

    return $type;
}


function physicalMutationManifestation($input)
{
    $a00 = array("The mutant doubles over in pain as the size change takes effect.",
                "The mutant’s skin roils as muscle and bone reshape.",
                "The mutant’s body appears to strobe as he changes size in small increments.",
                "The mutant is surrounded by a nimbus of rotating electrons.");

    $a01 = array("The mutant’s feet glow and a directional pulse of current travels through the ground to target.",
                "The mutant’s hands glow and twin arcs of electricity shoot out from them to target.",
                "The hair on the mutant’s body stands on end as a tesla arc of electricity jumps from the mutant’s mid-section to target.",
                "The mutant’s body crackles and glows as balls of electricity form in the mutants hands that can be thrown at target.");

    $a02 = array("The mutant has bat-like ears and can effectively see in the dark via echolocation.",
                      "The mutant has a flicking, extensible tongue which allows the mutant to sense other creatures and objects by taste and smell.",
                      "The mutant has insectoid antennae that act as motion detectors.",
                      "The mutant skin acts as a radiation detector, sensing micro-changes in heat and radiation.");

    $a03 = array("A jet of gas is exhaled from the mutant’s mouth.",
                "Twin streams of gas pour from special orifices located in the palms of the mutants hands or manipulative members.",
                "The mutant’s body exudes gas from pores in the mutant’s skin.",
                "Through concentration, the mutant is able to transmute a localized pocket of air into an efficacious gas.");

    $a04 = array("The mutant’s appearance becomes that of a barely noticeable silhouette.",
                      "The mutant’s appearance briefly inverts into a color negative of itself before vanishing.",
                      "The mutant’s body shimmers in a rainbow banded light and then vanishes.",
                      "The mutant’s body appears to loose dimensionality, first along the horizontal plane, then along the vertical.");

    $a05 = array("The mutant’s hands flash brightly.",
    "The mutant’s eyes shoot twin beams of light.",
    "The mutant’s skin momentarily incandesces in a flash of light.",
    "The mutant’s body is momentarily surrounded by a globe of bright light which collects itself at his chest before discharging.");

    $a06 = array("The mutant’s skin shimmers and twists as the change takes place.",
                      "The mutant’s body appears to rapidly rotate in multiple blurred bands of movement.",
                      "An image of the intended new shape flickers briefly in the mutant’s pupils immediately prior to the change.",
                      "The mutant’s body briefly becomes wavy and gelatinous as it transitions into the new shape.");

    $a07 = array("The mutant’s body glows with a bright blue halo.",
                    "The mutant’s hands are surrounded by a blue nimbus of orbiting electrons.",
                    "The mutant’s eyes fire twin blasts of searing blue light.",
                    "The mutant’s body flashes blue/white for one second, and then a small mushroom Cloud roils upwards from him or her.");
                    
    $a08 = array("The mutant’s body is bathed in a soft white glow when healing.",
    "The mutant’s body shimmers and sparkles as cells divide and regrow.",
    "Any visible wounds on the mutant’s body immediately fill with an opaque white gel which solidifies into flesh and bone.",
    "The mutant’s body roils as existing tissues shoot fleshy tendrils over wounds and then gradually rebuild damaged areas.");

    $a09 = array("Concentric waves of sonic energy erupt from the mutant’s mouth as a high-pitched scream.",
                      "The mutant’s fingertips project blasts of sonic energy.",
                      "A small organ in the mutant’s forehead emits sonic pulses.",
                      "The mutant emits pulsating waves of sonic energy directly from his or her chest.");

    $a10 = array("The mutant’s fingers end in tiny suction cups.",
                      "The mutant’s forearms shoot out serpentine tendrils.",
                      "Whatever part of the mutant that is in direct physical contact with the target merges with the skin of the target.",
                      "The mutant’s head is surrounded by a semi-transparent holographic projection of the face of the target creature.");

    $a11 = array("The mutant’s back and abdomen are encased in a turtle-like shell.",
                      "The mutant’s body is covered by a chitinous exoskeletal.",
                      "The mutant’s skin is like thick, spiked dinosaur hide.",
                      "The mutant’s body is covered in hexagonal granite-like epidermal cells.");

    $a12 = array("The mutant’s claws are composed of a razor sharp chitinous or bone-like material.",
                      "The mutant’s claws are comprised of organic duralloy.",
                      "The mutant’s Claws are molecular-edge carbon nano-structures.",
                      "The mutant’s claws are projected as edged plasma fields.");

    $a13 = array("The mutant’s metabolism runs at a superior rate and the rail-thin mutant must consume twice as many calories as normal.",
                      "The mutant’s genes carry fragments of mongoose DNA, causing increased reaction speed and giving the mutant a rat-like face.",
                      "The mutant’s nerve conduction velocity is accelerated to that of a radioactive spider.",
                      "The mutant’s brain is able to scan alternate future timelines in a limited fashion, and is thus better able to calculate body speed, position, and actions.");

    $a14 = array("The mutant’s skin appears as dull lead.",
                      "The mutant’s skin is the color of oxidized copper.",
                      "The mutant’s skin resembles chrome plating.",
                      "The mutant’s skin flashes metallic red briefly each time the mutant makes a Fortitude saving throw.");

    $a15 = array("The mutant’s body appears extremely over-muscled.",
                      "The mutant is abnormally short and squat, as though adapted for a higher gravity.",
                      "The mutant’s body glows dimly and converts nearby matter directly into kinetic energy whenever extreme strength is exercised.",
                      "The mutant’s body is composed of superdense ebony-colored elements and weighs 3x normal.");

    $a16 = array("The mutant’s movements, even when resting, appear jittery and shaky.",
                      "The mutant is unable to remain still or at rest, even when sleeping.",
                      "The mutant operates in a slightly different time frame, and does not appear to move at all, but strobes instantly from one position to the next.",
                      "The mutant’s movements cannot be followed by normal vision, as he is visible only as a blurred streak when acting at an accelerated pace.");

    $a17 = array( "The mutant’s eyes reflect red light in the dark.",
                      "The mutant’s entire field of vision can be dimly seen in the dark as twin projected light beams.",
                      "The mutant’s eyes are entirely comprised of reddish pupils.",
                      "The mutant has a third eye placed center in the mutant’s forehead which actively broadcasts infrared light.");

    $a18 = array("The extra body parts are a different skin color (see Table 1-6, result 1-5).",
                      "The extra body parts are scaly or furry.",
                      "The extra body parts are skeletal or chitinous.",
                      "The extra body parts are metallic, and appear artificial.");

    $a19 = array("The new body parts are scaly.",
                      "The new body parts are furred.",
                      "The new body parts are skeletal or chitinous.",
                      "The new body parts are metallic, and appear artificial.");

    $a20 = array("The mutant’s body is supple and rubbery.",
                      "The mutant’s body and appendages are coiled and extensible.",
                      "The mutant’s body is gelatinous in nature with pseudopodic arms and legs.",
                      "The mutant’s body is comprised of an unknown quantum state of matter, able to add and subtract mass instantaneously.");

    $a21 = array("The mutant’s body is a scaled-down version of other members of his genotype.",
                      "The mutant’s body is shorter but just as wide as other members of his genotype.",
                      "The mutant’s body is shorter than other members of his genotype, but his lower legs and feet are extra-large.",
                      "The mutant’s upper body is normally proportioned, but he has no legs with feet attached directly to the torso.");

    $a22 = array("The mutant’s back and abdomen are covered in stiff quills.",
                      "The mutant’s forearms are covered with bony spines.",
                      "The mutant’s head has long sharp metallic quills, helmets and other head gear may not be worn.",
                      "The mutant’s skin contains thousands of sub-dermal pores containing short, chitinous bone spikes.");

    $a23 = array("The mutant’s body is a scaled-up version of other members of his genotype.",
                      "The mutant’s body is taller but much slimmer than other members of his genotype.",
                      "The mutant’s body is taller than other members of his genotype, but his lower legs and feet are extra-wide.",
                      "The mutant’s upper body is normally proportioned, but he his legs are much longer than other members of his genotype or species.");

    $a24 = array("The mutant’s eyes glow ultraviolet.",
                      "The mutant’s entire field of vision acts as a black light lamp, these purple beams are visible under dim lighting conditions.",
                      "The mutant’s eyes are entirely composed of dark purple pupils.",
                      "The mutant has a single cyclopean eye that is all-white with no visible iris or pupil.");

    $a25 = array("The mutant has wings of a type closely related to the mutant’s genotype (furred for mammals, feathered for avians, scaly for reptilians, etc.).",
                      "The mutant has wings of an unrelated type for the mutant’s genotype (insectoid or feathered wings on a mammal, and so on).",
                      "The mutant has wings comprised of a chrome-like organic metal.",
                      "The mutant has wings composed of electric-blue projected force fields.");


    $array1= array($a00, $a01, $a02, $a03, $a04, $a05, $a06, $a07, $a08, $a09, $a10, $a11, $a12, $a13, $a14, $a15, $a16, $a17, $a18, $a19, $a20, $a21, $a22, $a23, $a24, $a25);
    
    return $array1[$input];
    
}

function getPhysicalMutationManifestation($input)
{
    $dieRoll = rand(0, 3);

    $physicalMutaton = physicalMutationManifestation($input)[$dieRoll];

    return $physicalMutaton;
}


    
function physicalMutationActiveEffect($input)
{
    $a00 = array("Failure, mutation results in cosmetic change only; non-protective skin change.",
                "The mutant’s natural AC increases by +2",
                "The mutant’s natural AC increases by +2",
                "The mutant’s natural AC increases by +3, +1 to Fortitude saves.",
                "The mutant’s natural AC increases by +4, +2 to Fortitude saves, speed reduced by 5’.",
                "The mutant’s natural AC increases by +5, +3 to Fortitude saves, speed reduced by 10’.");

    $a01 = array("Failure, mutation results in cosmetic change only; non-damaging claws.",
                "The mutant’s claws cause 1d3 damage per strike.",
                "The mutant’s claws cause 1d5 damage per strike.",
                "The mutant’s claws cause 1d7 damage per strike.",
                "The mutant’s claws cause 1d14 damage per strike.",
                "The mutant’s claws cause 1d16 damage per strike.");

    $a02 = array("Failure, mutation results in a cosmetic change only: hyperactive speech.",
                "The mutant’s Agility score is increased by +1.",
                "The mutant’s Agility score is increased by +2.",
                "The mutant’s Agility score is increased by +3.",
                "The mutant’s Agility score increases by +4;  base speed is increased to 35’.",
                "The mutant’s Agility score increases by +6; AC is increased by +9 (ignore normal Agility modifier for AC); base speed is increased to 40’.");

    $a03 = array("Failure, mutation results in a cosmetic change only: mutant’s skin does not appear to show external damage or trauma.",
                "The mutant’s Stamina score is increased by +1.",
                "The mutant’s Stamina score is increased by +2.",
                "The mutant’s Stamina score is increased by +3.",
                "The mutant’s Stamina score increases by +4; mutant is not vulnerable to electrical attacks.",
                "The mutant’s Stamina score increases by +6; mutant is immune to heat attacks.");

    $a04 = array("Failure, mutation results in a cosmetic change only: mutant appears well-muscled.",
                "The mutant’s Strength score is increased by +1.",
                "The mutant’s Strength score is increased by +2.",
                "The mutant’s Strength score is increased by +3.",
                "The mutant’s Strength score increases by +4;  mutant’s speed is reduced by 5’.",
                "The mutant’s Strength score increases by +6; mutant’s speed is reduced by 10’.");
                
    $a05 = array("Failure, mutation results in a cosmetic change only: mutant is twitchy; constantly moving; rarely resting.",
                "The mutant’s movement speed is increased by +5’.",
                "The mutant’s movement speed is increased by +10’.",
                "The mutant’s movement speed is increased by +15’; gains additional d14 action die.",
                "The mutant’s movement speed is increased by +20’;  gains additional d16 action die.",
                "The mutant’s movement speed is increased by +25’;  gains additional d20 action die.");

    $a06 = array("Failure, mutation results in a cosmetic change only (see manifestation).",
                "The mutant is able to see infrared heat sources up to 10’ distant.",
                "The mutant is able to see infrared heat sources up to 20’ distant.",
                "The mutant is able to see infrared heat sources up to 40’ distant.",
                "The mutant is able to see infrared heat sources up to 60’ distant, including residual heat signatures up to 10 minutes old.",
                "The mutant is able to see infrared heat sources up to 100’ distant, including residual heat signatures and cold spots up to 30 minutes old.");
                

    $a07 = array("The mutant has 2 extra arms and gains a d16 additional action die for melee attacks only.",
            "The mutant has 2 extra legs and gains an additional 20’ to movement.",
            "The mutant has 2 extra arms and gains a d20 additional action die for melee attacks only.",
            "The mutant has 2 extra arms and gains a d20 additional action die for melee attacks only.",
            "The mutant has 2 extra arms and gains a d20 additional action die for melee attacks only; mutant also has 2 extra legs and gains + 30’ to movement.",
            "The mutant has 4 extra arms and gains a d20 additional action die for melee attacks only; also has 4 extra legs and gains + 40’ to movement.");
            
        $a08 = array("The mutant possesses antennae that allow the mutant to sense movement in a 360 degree arc; mutant cannot be surprised by moving creatures or objects.",
            "A long prehensile tail that acts as an extra arm; mutant gains an additional d16 action die for melee and missile attacks only*; +1 Agility.",
            "The mutant possesses gills and may breathe underwater.",
            "The mutant possesses wings; mutant gains 30’ flying movement.",
            "The mutant possesses wings; mutant gains 30’ flying movement.",
            "The mutant possesses gills and finned arms, legs, and back; mutant may breathe underwater and gains 30’ swimming movement.");

        $a09 = array("Failure, mutation results in cosmetic change only; mutant can contort arms and legs in a minimal fashion.",
            "The mutant is able to extend arms 10’ and may engage in melee at that range.",
            "The mutant is able to extend arms and legs 15’ and may engage in melee at that range; gains additional 15’ to movement.",
            "The mutant is able to extend arms and legs 20’ and may engage in melee at that range; gains additional 20’ to movement; gains -1 to blunt force damage.",
            "The mutant is able to extend arms and legs 30’ and may engage in melee at that range; gains additional 30’ to movement; gains -1d3 to blunt force damage.",
            "The mutant is able to extend entire body 40’ and may engage in melee at that range; gains additional 40’ to movement; gains -1d6 to any blunt force dmg.");

            $a10 = array("Failure, mutation results in cosmetic change only; mutant is only slightly shorter than average for his genotype and species.",
            "The mutant is 1’ shorter than average members of his genotype and species; AC increases by +1.",
            "The mutant is 2’ shorter than average members of his genotype and species; AC increases by +2, normal mv speed is reduced by 5’/round.",
            "The mutant is 2’ shorter than average members of his genotype and species; AC increases by +2, normal mv speed is reduced by 5’/round.",
            "The mutant is 3’ shorter than average members of his genotype and species; AC increases by +3, normal move speed reduced by 10’/round.",
            "The mutant is 1/3 the height of average members of his genotype and species; AC increases by +4, normal movement speed reduced by 15’.");
            
        $a11 = array("Failure, mutation results in cosmetic change only; quills or spines are non-functional.",
            "The mutant’s AC +1; mutant may fire quills/spines for 1d4 damage against a single target.",
            "The mutant’s AC +2; mutant may fire quills/spines for 1d6 damage against a single target.",
            "The mutant’s AC +3; mutant may fire quills/spines for 2d6 damage against a single target, or for 1d6 each against two adjacent targets.",
            "The mutant’s AC +3; mutant may fire quills/spines for 3d6 damage against a single target, or for 1d6 each against three adjacent targets.",
            "The mutant’s AC +5, +2 to Ref saves; mutant may fire quills/spines for 4d6 damage against a single target, or for 1d6 each against 4 adjacent targets.");

        $a12 = array("Failure, mutation results in cosmetic change only; mutant is only slightly taller than average for his genotype and species.",
            "The mutant is 1’ taller than average members of his genotype and species; mutant gains +1 to Strength and AC -1.",
            "The mutant is 2’ taller than average members of his genotype and species; mutant gains +2 to Strength, +5’ to movement speed, and AC  -2.",
            "The mutant is 1’ taller than average members of his genotype and species; mutant gains +1 to Strength and AC -1.",
            "The mutant is 2’ taller than average members of his genotype and species; mutant gains +2 to Strength, +5’ to movement speed, and AC  -2.",
            "The mutant is 2’ taller than average members of his genotype and species; mutant gains +2 to Strength, +5’ to movement speed, and AC  -2.");

        $a13 = array("Failure, mutation results in a cosmetic change only (see manifestation).",
            "The mutant is able to see in the ultraviolet range, up to 10’ distant; mutant has full vision in any outdoor situation, no matter how dark.",
            "The mutant is able to see in the ultraviolet range, up to 20’ distant; mutant has full vision in any outdoor or underground situation, no matter how dark.",
            "The mutant is able to see in the ultraviolet range, up to 20’ distant; mutant has full vision in any outdoor or underground situation, no matter how dark.",
            "The mutant is able to see microwave sources and transmissions up to 40’; mutant’s vision may inflict 2d6 of heat damage to a single target as an action.",
            "The mutant is able to see infrared heat sources up to 100’ distant, including residual heat signatures and cold spots up to 30 minutes old.");
            
        $a14 = array("Failure, mutation results in cosmetic change only; non-functional wings.",
            "The mutant’s wings are capable of level gliding for distances up to 40’/round, or 1/2 speed carrying up to 50 lbs.",
            "The mutant’s wings are capable of powered flight for distances up to 50’/round, or 1/2 speed carrying up to 100 lbs.",
            "The mutant’s wings are capable of powered flight for distances up to 60’/round, or 1/2 speed carrying up to 150 lbs.",
            "The mutant’s wings are capable of powered flight for distances up to 70’/round, or 1/2 speed carrying up to 200 lbs. or full str capacity, whichever is greater.",
            "The mutant’s wings are capable of powered flight for distances up to 80’/round, or 1/2 speed carrying up to full strength capacity.");


    $array1= array($a00, $a01, $a02, $a03, $a04, $a05, $a06, $a07, $a08, $a09, $a10, $a11, $a12, $a13, $a14);
    
    return $array1[$input];
    
}


function getPhyicalMutationEffect($input, $dieRoll)
{
    $select = ($input - 11);

    $effect = physicalMutationActiveEffect($select)[$dieRoll];

    return $effect;
}


function getPhyicalMutationAdjustments($input, $dieRoll)
{
    $select = ($input - 11);

    if($select == 0)
    {
        switch($dieRoll)
        {
            /*0 = str, 1 = agi, 2 = sta, 3 = per, 4 = int,
            5 = AC, 6 = init, 7 = action die,
            8 = melee, 9 = missile,
            10 = ref, 11 = fort, 12 = will,
            13 = speed */
            case 0:
                $adjustmentArray = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
                break;

            case 1:
                $adjustmentArray = array(0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0);
                break;

            case 2:
                $adjustmentArray = array(0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0);
                break;

            case 3:
                $adjustmentArray = array(0, 0, 0, 0, 0, 3, 0, 0, 0, 0, 0, 1, 0, 0);
                break;

            case 4:
                $adjustmentArray = array(0, 0, 0, 0, 0, 4, 0, 0, 0, 0, 0, 2, 0, -5);
                break;

            case 5:
                $adjustmentArray = array(0, 0, 0, 0, 0, 5, 0, 0, 0, 0, 0, 3, 0, -10);
                break;
            
            default:
                $adjustmentArray = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
        }

    }
    else if($select == 1)
    {
        switch($dieRoll)
        {
            /*0 = str, 1 = agi, 2 = sta, 3 = per, 4 = int,
            5 = AC, 6 = init, 7 = action die,
            8 = melee, 9 = missile,
            10 = ref, 11 = fort, 12 = will,
            13 = speed */
            case 0:
                $adjustmentArray = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
                break;

            case 1:
                $adjustmentArray = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
                break;

            case 2:
                $adjustmentArray = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
                break;

            case 3:
                $adjustmentArray = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
                break;

            case 4:
                $adjustmentArray = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
                break;

            case 5:
                $adjustmentArray = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
                break;
            
            default:
            $adjustmentArray = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
        }

    }
    else if($select == 2)
    {
        switch($dieRoll)
        {
            /*0 = str, 1 = agi, 2 = sta, 3 = per, 4 = int,
            5 = AC, 6 = init, 7 = action die,
            8 = melee, 9 = missile,
            10 = ref, 11 = fort, 12 = will,
            13 = speed */
            case 0:
                $adjustmentArray = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
                break;

            case 1:
                $adjustmentArray = array(0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
                break;

            case 2:
                $adjustmentArray = array(0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
                break;

            case 3:
                $adjustmentArray = array(0, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
                break;

            case 4:
                $adjustmentArray = array(0, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5);
                break;

            case 5:
                $adjustmentArray = array(0, 6, 0, 0, 0, 9, 0, 0, 0, 0, 0, 0, 0, 10);
                break;
            
            default:
                $adjustmentArray = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
        }

    }
    else if($select == 3)
    {
        switch($dieRoll)
        {
            /*0 = str, 1 = agi, 2 = sta, 3 = per, 4 = int,
            5 = AC, 6 = init, 7 = action die,
            8 = melee, 9 = missile,
            10 = ref, 11 = fort, 12 = will,
            13 = speed */
            case 0:
                $adjustmentArray = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
                break;

            case 1:
                $adjustmentArray = array(0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
                break;

            case 2:
                $adjustmentArray = array(0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
                break;

            case 3:
                $adjustmentArray = array(0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
                break;

            case 4:
                $adjustmentArray = array(0, 0, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
                break;

            case 5:
                $adjustmentArray = array(0, 0, 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
                break;
            
            default:
                $adjustmentArray = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
        }

    }
    else if($select == 4)
    {
        switch($dieRoll)
        {
            /*0 = str, 1 = agi, 2 = sta, 3 = per, 4 = int,
            5 = AC, 6 = init, 7 = action die,
            8 = melee, 9 = missile,
            10 = ref, 11 = fort, 12 = will,
            13 = speed */
            case 0:
                $adjustmentArray = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
                break;

            case 1:
                $adjustmentArray = array(1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
                break;

            case 2:
                $adjustmentArray = array(2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
                break;

            case 3:
                $adjustmentArray = array(3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
                break;

            case 4:
                $adjustmentArray = array(4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, -5);
                break;

            case 5:
                $adjustmentArray = array(6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, -10);
                break;
            
            default:
                $adjustmentArray = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
        }

    }
    else if($select == 5)
    {
        switch($dieRoll)
        {
            /*0 = str, 1 = agi, 2 = sta, 3 = per, 4 = int,
            5 = AC, 6 = init, 7 = action die,
            8 = melee, 9 = missile,
            10 = ref, 11 = fort, 12 = will,
            13 = speed */
            case 0:
                $adjustmentArray = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
                break;

            case 1:
                $adjustmentArray = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5);
                break;

            case 2:
                $adjustmentArray = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10);
                break;

            case 3:
                $adjustmentArray = array(0, 0, 0, 0, 0, 0, 0, 100, 0, 0, 0, 0, 0, 15);
                break;

            case 4:
                $adjustmentArray = array(0, 0, 0, 0, 0, 0, 0, 10, 0, 0, 0, 0, 0, 20);
                break;

            case 5:
                $adjustmentArray = array(0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 25);
                break;
            
            default:
                $adjustmentArray = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
        }

    }
    else if($select == 6)
    {
        switch($dieRoll)
        {
            //Infra red sight NO ADJUST
            /*0 = str, 1 = agi, 2 = sta, 3 = per, 4 = int,
            5 = AC, 6 = init, 7 = action die,
            8 = melee, 9 = missile,
            10 = ref, 11 = fort, 12 = will,
            13 = speed */
            case 0:
                $adjustmentArray = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
                break;

            case 1:
                $adjustmentArray = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
                break;

            case 2:
                $adjustmentArray = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
                break;

            case 3:
                $adjustmentArray = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
                break;

            case 4:
                $adjustmentArray = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
                break;

            case 5:
                $adjustmentArray = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
                break;
            
            default:
            $adjustmentArray = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
        }

    }
    else if($select == 7)
    {
        switch($dieRoll)
        {
            /*0 = str, 1 = agi, 2 = sta, 3 = per, 4 = int,
            5 = AC, 6 = init, 7 = action die,
            8 = melee, 9 = missile,
            10 = ref, 11 = fort, 12 = will,
            13 = speed */
            case 0:
                $adjustmentArray = array(0, 0, 0, 0, 0, 0, 0, 10, 0, 0, 0, 0, 0, 0);
                break;

            case 1:
                $adjustmentArray = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 20);
                break;

            case 2:
                $adjustmentArray = array(0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0);
                break;

            case 3:
                $adjustmentArray = array(0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0);
                break;

            case 4:
                $adjustmentArray = array(0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 30);
                break;

            case 5:
                $adjustmentArray = array(0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 40);
                break;
            
            default:
                $adjustmentArray = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
        }

    }
    else if($select == 8)
    {
        
        switch($dieRoll)
        {
            /*0 = str, 1 = agi, 2 = sta, 3 = per, 4 = int,
            5 = AC, 6 = init, 7 = action die,
            8 = melee, 9 = missile,
            10 = ref, 11 = fort, 12 = will,
            13 = speed */
            case 0:
                $adjustmentArray = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
                break;

            case 1:
                $adjustmentArray = array(0, 1, 0, 0, 0, 0, 0, 10, 0, 0, 0, 0, 0, 0);
                break;

            case 2:
                $adjustmentArray = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
                break;

            case 3:
                $adjustmentArray = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
                break;

            case 4:
                $adjustmentArray = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
                break;

            case 5:
                $adjustmentArray = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
                break;
            
            default:
            $adjustmentArray = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
        }

    }
    else if($select == 9)
    {
        switch($dieRoll)
        {
            /*0 = str, 1 = agi, 2 = sta, 3 = per, 4 = int,
            5 = AC, 6 = init, 7 = action die,
            8 = melee, 9 = missile,
            10 = ref, 11 = fort, 12 = will,
            13 = speed */
            case 0:
                $adjustmentArray = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
                break;

            case 1:
                $adjustmentArray = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
                break;

            case 2:
                $adjustmentArray = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 15);
                break;

            case 3:
                $adjustmentArray = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 20);
                break;

            case 4:
                $adjustmentArray = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 30);
                break;

            case 5:
                $adjustmentArray = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 40);
                break;
            
            default:
                $adjustmentArray = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
        }

    }
    else if($select == 10)
    {
        switch($dieRoll)
        {
            /*0 = str, 1 = agi, 2 = sta, 3 = per, 4 = int,
            5 = AC, 6 = init, 7 = action die,
            8 = melee, 9 = missile,
            10 = ref, 11 = fort, 12 = will,
            13 = speed */
            case 0:
                $adjustmentArray = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
                break;

            case 1:
                $adjustmentArray = array(0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0);
                break;

            case 2:
                $adjustmentArray = array(0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, -5);
                break;

            case 3:
                $adjustmentArray = array(0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, -5);
                break;

            case 4:
                $adjustmentArray = array(0, 0, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, -10);
                break;

            case 5:
                $adjustmentArray = array(0, 0, 0, 0, 0, 4, 0, 0, 0, 0, 0, 0, 0, -15);
                break;
            
            default:
                $adjustmentArray = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
        }

    }
    else if($select == 11)
    {
        switch($dieRoll)
        {
            /*0 = str, 1 = agi, 2 = sta, 3 = per, 4 = int,
            5 = AC, 6 = init, 7 = action die,
            8 = melee, 9 = missile,
            10 = ref, 11 = fort, 12 = will,
            13 = speed */
            case 0:
                $adjustmentArray = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
                break;

            case 1:
                $adjustmentArray = array(0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0);
                break;

            case 2:
                $adjustmentArray = array(0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0);
                break;

            case 3:
                $adjustmentArray = array(0, 0, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 0);
                break;

            case 4:
                $adjustmentArray = array(0, 0, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 0);
                break;

            case 5:
                $adjustmentArray = array(0, 0, 0, 0, 0, 5, 0, 0, 0, 2, 0, 0, 0, 0);
                break;
            
            default:
                $adjustmentArray = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
        }

    }
    else if($select == 12)
    {
        switch($dieRoll)
        {
            /*0 = str, 1 = agi, 2 = sta, 3 = per, 4 = int,
            5 = AC, 6 = init, 7 = action die,
            8 = melee, 9 = missile,
            10 = ref, 11 = fort, 12 = will,
            13 = speed */
            case 0:
                $adjustmentArray = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
                break;

            case 1:
                $adjustmentArray = array(1, 0, 0, 0, 0, -1, 0, 0, 0, 0, 0, 0, 0, 0);
                break;

            case 2:
                $adjustmentArray = array(2, 0, 0, 0, 0, -2, 0, 0, 0, 0, 0, 0, 0, 5);
                break;

            case 3:
                $adjustmentArray = array(1, 0, 0, 0, 0, -1, 0, 0, 0, 0, 0, 0, 0, 0);
                break;

            case 4:
                $adjustmentArray = array(2, 0, 0, 0, 0, -2, 0, 0, 0, 0, 0, 0, 0, 5);
                break;

            case 5:
                $adjustmentArray = array(2, 0, 0, 0, 0, -2, 0, 0, 0, 0, 0, 0, 0, 5);
                break;
            
            default:
                $adjustmentArray = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
        }

    }
    else if($select == 13)
    {
        //Ultra violet vision no adjust
        switch($dieRoll)
        {
            /*0 = str, 1 = agi, 2 = sta, 3 = per, 4 = int,
            5 = AC, 6 = init, 7 = action die,
            8 = melee, 9 = missile,
            10 = ref, 11 = fort, 12 = will,
            13 = speed */
            case 0:
                $adjustmentArray = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
                break;

            case 1:
                $adjustmentArray = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
                break;

            case 2:
                $adjustmentArray = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
                break;

            case 3:
                $adjustmentArray = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
                break;

            case 4:
                $adjustmentArray = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
                break;

            case 5:
                $adjustmentArray = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
                break;
            
            default:
            $adjustmentArray = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
        }

    }
    
    else if($select == 14)
    {
        //wings no adjust
        switch($dieRoll)
        {
            /*0 = str, 1 = agi, 2 = sta, 3 = per, 4 = int,
            5 = AC, 6 = init, 7 = action die,
            8 = melee, 9 = missile,
            10 = ref, 11 = fort, 12 = will,
            13 = speed */
            case 0:
                $adjustmentArray = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
                break;

            case 1:
                $adjustmentArray = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
                break;

            case 2:
                $adjustmentArray = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
                break;

            case 3:
                $adjustmentArray = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
                break;

            case 4:
                $adjustmentArray = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
                break;

            case 5:
                $adjustmentArray = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
                break;
            
            default:
            $adjustmentArray = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
        }

    }
    else
    {
        switch($dieRoll)
        {
            /*0 = str, 1 = agi, 2 = sta, 3 = per, 4 = int,
            5 = AC, 6 = init, 7 = action die,
            8 = melee, 9 = missile,
            10 = ref, 11 = fort, 12 = will,
            13 = speed */
            case 0:
                $adjustmentArray = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
                break;

            case 1:
                $adjustmentArray = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
                break;

            case 2:
                $adjustmentArray = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
                break;

            case 3:
                $adjustmentArray = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
                break;

            case 4:
                $adjustmentArray = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
                break;

            case 5:
                $adjustmentArray = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
                break;
            
            default:
            $adjustmentArray = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
        }

    }

    return $adjustmentArray;

}


?>