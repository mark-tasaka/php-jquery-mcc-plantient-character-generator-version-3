<?php

function getDefectMutationName($input)
{
    $mutationName = array("Death Pretense", 
    "Life Force Transference",
    "Asymmetrical Body",
    "Atraction Ordor",
    "Body Part Loss",
    "Delayed Reaction",
    "Delusional",
    "Devolved",
    "Diminished Body Part",
    "Diminished Sense",
    "Diminished Stamina",
    "Enmity",
    "Enlarged Body Part",
    "Ipsilateral Body Plan",
    "Mental Block",
    "Mental Defenselessness",
    "Multiple Personalities",
    "Special Vulnerability",
    "Stumblebum",
    "Stunted Wings",
    "Thin Skin",
    "Uncontrolled Empathy",
    "Uncontrolled Telepathy",
    "Useless Body Parts",
    "Weak Willed");

    return $mutationName[$input];
}

function getDefectlMutationType($input)
{
    if($input <= 1)
    {
        $type = "Active";
    }
    else
    {
        $type = "Passive";
    }

    return $type;
}


function defectMutationActiveEffect($input)
{
    $a00 = array("The mutant’s body is greatly atrophied on one side: melee and missile attacks at -3, -10’ movement speed.",
                "The mutant has one arm much larger than the other; +1 Strength, -2 Agility.",
                "The mutant has one leg much longer than the other; +5’ movement speed, -2 Agility.",
                "The mutant’s facial features are ever so slightly off-center; -1 AI recognition.",
                "The mutant’s facial features are ever so slightly off-center; -1 AI recognition.");

    $a01 = array("The mutant’s fetid stench attracts carrion feeders; -3 Personality.",
                "The mutant’s rancid pungence causes rodents to seek out the mutant.",
                "The mutant’s redolent odor attracts biting insects, bees, and wasps.",
                "The mutant’s musky fragrance causes non-sentient creatures to go into rut.",
                "The mutant slight air of feculence attracts flies wherever he goes.");

    $a02 = array("The mutant has no head; all features normally found on the head are located mid-abdomen; -3 Personality.",
                "The mutant is missing one leg; -4 Agility, 1/2 normal movement.",
                "The mutant is missing one arm; -2 Agility.",
                "The mutant is missing one eye and has no depth perception; -2 melee attacks, -3 missile attacks.",
                "The mutant has no eyelids, and must sleep with eyes open or blindfolded; -1 Stamina.");
                
    $a03 = array("The mutant’s deep-rooted dyslexia causes the mutant to automatically go last in combat initiative order.",
                "The mutant’s tendency to hem and haw results in -5 to initiative rolls.",
                "The mutant’s chronic over thinking results in -4 to combat initiative rolls.",
                "The mutant’s habitual dawdling results in -3 to initiative rolls.",
                "The mutant’s momentary pause results in -2 to initiative rolls.");

    $a04 = array("The mutant’s hysterical blindness towards pure strain humans renders that genotype effectively invisible...",
                "The mutant’s hysterical blindness towards pure strain humans renders that genotype effectively invisible...",
                "The mutant’s hysterical blindness towards manimals renders that genotype effectively invisible...",
                "The mutant’s hysterical blindness towards manimals renders that genotype effectively invisible...",
                "The mutant’s hysterical blindness towards plantients renders that genotype effectively invisible...");

    $a05 = array("The mutant physically resembles their source genotype;  mutant is mute and unable to handle tools...",
                "The mutant is barely able to handle tools with a -6 Agility.",
                "The mutant physically resembles a slightly larger version of his or her source genotype; -4 Agility.",
                "The mutant physically resembles a tall, erect version of his or her source genotype; -2 Agility.",
                "The mutant is a slightly less evolved example of his or her genotype; -1 Intelligence.");

    $a06 = array("The mutant’s head is tiny and doll-like; -3 to all ranged attacks.",
                "The mutant’s hands are over-small and childlike; -2 to melee and missile attacks.",
                "The mutant’s feet are stunted and miniature; -2 Agility, -10’ movement speed.",
                "The mutant’s digestive track is reduced in size and function; -1 Stamina.",
                "The mutant’s heart is three sizes too small; the mutant hates all celebrations and holidays; -2 Personality.");

    $a07 = array("Mutant is extremely nearsighted with -4 to all ranged attacks.",
                "Mutant is quite farsighted with -4 to all melee attacks.",
                "Mutant has motion blindness with -2 to all attacks.",
                "The mutant suffers from a complete lack of common sense; -2 Intelligence.",
                "The mutant suffers from a complete lack of common sense; -2 Intelligence.");

    $a08 = array("The mutant’s Stamina score decreases by -4.",
                "The mutant’s Stamina score decreases by -5; mutant receives no saving throw versus damage from electrical attacks.",
                "The mutant’s Stamina score decreases by -6; mutant receives no saving throw versus damage from heat-based attacks.",
                "The mutant’s Stamina score decreases by -7;  mutant receives no saving throw versus damage from radiation-based attacks.",
                "The mutant’s Stamina score decreases by -3.");
                
    $a09 = array("Any non-sentient creature within range must make a Will save or attack the mutant upon first encountering them; -4 Personality.",
                "Any carnivore within range must make a Will save or attack the mutant upon first encountering them; -2 Personality.",
                "Any carnivore within range must make a Will save or attack the mutant upon first encountering them; -2 Personality.",
                "No one except mutant’s close friends and family can stand to be around him or her for more than 1 turn, making endless...",
                "No one except mutant’s close friends and family can stand to be around him or her for more than 1 turn, making endless...");

    $a10 = array("The mutant’s head is humongous; -2 AC.",
                "The mutant’s hands are over-large and clumsy; -2 to melee and missile attacks.",
                "The mutant’s feet are huge and ungainly; -2 Agility, +5’ movement.",
                "The mutant’s heart is three sizes too large; mutant takes in and adopts all strays; +2 Personality.",
                "The mutant is very popular with members of the opposite sex.");

    $a11 = array("The mutant has one leg and one arm where the other should be; -4 Agility, -2 Strength.",
                "The mutant’s arms are all located on one side of the mutant’s body (roll 1d5: 1-2 right side, 3-5 left side",
                "The mutant’s feet face in opposite directions, one forward and one facing backwards; -15’ movement",
                "The mutant's hands face in opposite directions (one up, the other down); - 2 Agility.",
                "The mutant’s eyes appear only on one sides of the mutant’s face, limiting field of vision; -1 to all attacks.");

    $a12 = array("The mutant has a congenital mental block when it comes to using artifacts of the Ancient Ones; mutant may never willingly or....",
                "The mutant has a mental block about taking common sense approaches to problem solving, making the mutant a serial contrarian; mutant will...",
                "The mutant has a mental block about taking common sense approaches to problem solving, making the mutant a serial contrarian; mutant will...",
                "The mutant has a mental block about taking common sense approaches to problem solving, making the mutant a serial contrarian; mutant will...",
                "The mutant has a mental block about taking common sense approaches to problem solving, making the mutant a serial contrarian; mutant will...");

    $a13 = array("The mutant’s Personality score decreases by -4; no saving throw versus Domination or Mind Control mutation attacks.",
                "The mutant’s Personality score decreases by -3.",
                "The mutant’s Personality score decreases by -2.",
                "The mutant’s Personality score decreases by -1.",
                "The mutant’s Personality score decreases by -1.");

    $a14 = array("The mutant has 10 different personalities; whenever the mutant rolls combat initiative, they must make a DC 18 Will...",
                "The mutant has 8 different personalities; whenever the mutant rolls combat initiative, they must make a DC 15 Will...",
                "The mutant has 6 different personalities; whenever the mutant rolls combat initiative, they must make a DC 12 Will...",
                "The mutant has 4 different personalities; whenever the mutant rolls combat initiative, they must make a DC 12 Will...",
                "The mutant has 2 different personalities; whenever the mutant rolls combat initiative, they must make a DC 8 Will...");
                
    $a15 = array("The mutant has a congenitally weak constitution, and takes 2x damage from all attacks.",
                "The mutant has a congenitally weak constitution, and takes 2x damage from all attacks.",
                "The mutant is narcoleptic; must make DC 10 Fortitude save to stay awake during watches or combat.",
                "The mutant is narcoleptic; must make DC 10 Fortitude save to stay awake during watches or combat.",
                "The mutant is narcoleptic; must make DC 10 Fortitude save to stay awake during watches or combat.");

    $a16 = array("The mutant’s Agility score is decreased by -5.",
                "The mutant’s Agility score is decreased by -4.",
                "The mutant’s Agility score is decreased by -3.",
                "The mutant’s Agility score is decreased by -2.",
                "The mutant’s Agility score is decreased by -1.");

    $a17 = array("The mutant has two ill-balanced fleshy nubs growing out of mutant’s back; -2 Agility.",
                "The mutant has tiny malformed wings that are as laughably non-functional as they are awkward; -1 Agility.",
                "The mutant has non-functional flight feathers growing from forearms and calves.",
                "The mutant has non-functional membranes stretching from wrist to ankles.",
                "The mutant has smallish wings that act as a crude and ineffective parachute; mutant takes 1/2 damage from falling.");

    $a18 = array("The mutant takes 2x damage from physical attacks.",
                "The mutant takes 2x damage from mental mutation attacks.",
                "The mutant takes 2x damage from any EM-based attacks.",
                "The mutant’s skin is copper-based and water soluble; mutant takes 2 hp damage per round if exposed to or immersed in water.",
                "The mutant is so thin-skinned that they is unable to participate in any group activity unless constantly praised by their fellows.");

    $a19 = array("Other creatures within range note the mutant’s presence and motives even if otherwise hidden.",
                "Other creatures within range discern the mutant’s presence and motives with a DC 4 Willpower Save.",
                "Other sentients may detect mutant’s motives by making a DC 6 Willpower save.",
                "Other sentients may detect mutant’s motives by making a DC 8 Willpower save.",
                "Other sentients may detect mutant’s motives by making a DC 12 Willpower save.");

    $a20 = array("The mutant’s deep thoughts and intentions may be read by any sentient making a DC 12 Willpower save.",
                "The mutant’s deep thoughts and intentions may be read by any sentient making a DC 12 Willpower save.",
                "The mutant’s surface thoughts and intentions may be read by any sentient making a DC 14 Willpower save.",
                "The mutant’s passing thoughts may be read by any sentient making a DC 16 Willpower save.",
                "The mutant’s passing thoughts may be read by any sentient making a DC 16 Willpower save.");
                
    $a21 = array("The mutant possesses a long clumsy tail that constantly throws the mutant off balance; -3 Agility.",
                "The mutant possesses non-functional gills and vestigial fins on arms and legs; -2 Agility.",
                "The mutant has small knobs growing out of his or her forehead; -1 AI recognition.",
                "The mutant possesses a sixth finger on each hand which occasionally lights up and beeps.",
                "The mutant has a thin membrane between ankles and wrists; mutant gains 5’ of gliding movement.");

    $a22 = array("The mutant has difficulty standing up to bullying, and must make a DC 8 Will save whenever he wishes to enter combat or win an argument.",
                "The mutant has difficulty standing up to bullying, and must make a DC 8 Will save whenever he wishes to enter combat or win an argument.",
                "The mutant is so fixated on people-pleasing that he cannot refuse any request from friends or allies for help or assistance of any type.",
                "The mutant is a “yes man” and must at least appear to agree with everyone, even enemies.",
                "The mutant is a “yes man” and must at least appear to agree with everyone, even enemies.");


    $array1= array($a00, $a01, $a02, $a03, $a04, $a05, $a06, $a07, $a08, $a09, $a10, $a11, $a12, $a13, $a14, $a15, $a16, $a17, $a18, $a19, $a20, $a21, $a22);
    
    return $array1[$input];
    
}



function getDefectMutationEffect($input, $dieRoll)
{
    $select = ($input - 2);

    $effect = defectMutationActiveEffect($select)[$dieRoll];

    return $effect;
}



function getDefectsAdjustments($input, $dieRoll)
{
    $select = ($input - 2);

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
                $adjustmentArray = array(0, 0, 0, 0, 0, 0, 0, 0, -3, -3, 0, 0, 0, -10);
                break;

            case 1:
                $adjustmentArray = array(1, -2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
                break;

            case 2:
                $adjustmentArray = array(0, -2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5);
                break;

            case 3:
                $adjustmentArray = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
                break;

            case 4:
                $adjustmentArray = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
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
                $adjustmentArray = array(0, 0, 0, -3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
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
                $adjustmentArray = array(0, 0, 0, -3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
                break;

            case 1:
                $adjustmentArray = array(0, -4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, -15);
                break;

            case 2:
                $adjustmentArray = array(0, -2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
                break;

            case 3:
                $adjustmentArray = array(0, 0, 0, 0, 0, 0, 0, 0, -2, -3, 0, 0, 0, 0);
                break;

            case 4:
                $adjustmentArray = array(0, 0, -1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
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
                $adjustmentArray = array(0, 0, 0, 0, 0, 0, -5, 0, 0, 0, 0, 0, 0, 0);
                break;

            case 2:
                $adjustmentArray = array(0, 0, 0, 0, 0, 0, -4, 0, 0, 0, 0, 0, 0, 0);
                break;

            case 3:
                $adjustmentArray = array(0, 0, 0, 0, 0, 0, -3, 0, 0, 0, 0, 0, 0, 0);
                break;

            case 4:
                $adjustmentArray = array(0, 0, 0, 0, 0, 0, -2, 0, 0, 0, 0, 0, 0, 0);
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
                $adjustmentArray = array(0, -6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
                break;

            case 2:
                $adjustmentArray = array(0, -4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
                break;

            case 3:
                $adjustmentArray = array(0, -2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
                break;

            case 4:
                $adjustmentArray = array(0, 0, 0, 0, -1, 0, 0, 0, 0, 0, 0, 0, 0, 0);
                break;

            default:
                $adjustmentArray = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
        }

    }
    else if($select == 6)
    {
        switch($dieRoll)
        {
            /*0 = str, 1 = agi, 2 = sta, 3 = per, 4 = int,
            5 = AC, 6 = init, 7 = action die,
            8 = melee, 9 = missile,
            10 = ref, 11 = fort, 12 = will,
            13 = speed */
            case 0:
                $adjustmentArray = array(0, 0, 0, 0, 0, 0, 0, 0, 0, -3, 0, 0, 0, 0);
                break;

            case 1:
                $adjustmentArray = array(0, 0, 0, 0, 0, 0, 0, 0, -2, -2, 0, 0, 0, 0);
                break;

            case 2:
                $adjustmentArray = array(0, -2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, -10);
                break;

            case 3:
                $adjustmentArray = array(0, 0, -1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
                break;

            case 4:
                $adjustmentArray = array(0, 0, 0, -2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
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
                $adjustmentArray = array(0, 0, 0, 0, 0, 0, 0, 0, 0, -4, 0, 0, 0, 0);
                break;

            case 1:
                $adjustmentArray = array(0, 0, 0, 0, 0, 0, 0, 0, -4, 0, 0, 0, 0, 0);
                break;

            case 2:
                $adjustmentArray = array(0, 0, 0, 0, 0, 0, 0, 0, -2, -2, 0, 0, 0, 0);
                break;

            case 3:
                $adjustmentArray = array(0, 0, 0, 0, -2, 0, 0, 0, 0, 0, 0, 0, 0, 0);
                break;

            case 4:
                $adjustmentArray = array(0, 0, 0, 0, -2, 0, 0, 0, 0, 0, 0, 0, 0, 0);
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
                $adjustmentArray = array(0, 0, -4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
                break;

            case 1:
                $adjustmentArray = array(0, 0, -5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
                break;

            case 2:
                $adjustmentArray = array(0, 0, -6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
                break;

            case 3:
                $adjustmentArray = array(0, 0, -7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
                break;

            case 4:
                $adjustmentArray = array(0, 0, -3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
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
                $adjustmentArray = array(0, 0, 0, -4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
                break;

            case 1:
                $adjustmentArray = array(0, 0, 0, -2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
                break;

            case 2:
                $adjustmentArray = array(0, 0, 0, -2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
                break;

            case 3:
                $adjustmentArray = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
                break;

            case 4:
                $adjustmentArray = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
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
                $adjustmentArray = array(0, 0, 0, 0, 0, -2, 0, 0, 0, 0, 0, 0, 0, 0);
                break;

            case 1:
                $adjustmentArray = array(0, 0, 0, 0, 0, 0, 0, 0, -2, -2, 0, 0, 0, 0);
                break;

            case 2:
                $adjustmentArray = array(0, -2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5);
                break;

            case 3:
                $adjustmentArray = array(0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
                break;

            case 4:
                $adjustmentArray = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
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
                $adjustmentArray = array(-2, -4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
                break;

            case 1:
                $adjustmentArray = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
                break;

            case 2:
                $adjustmentArray = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, -15);
                break;

            case 3:
                $adjustmentArray = array(0, -2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
                break;

            case 4:
                $adjustmentArray = array(0, 0, 0, 0, 0, 0, 0, 0, -1, -1, 0, 0, 0, 0);
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

            
            default:
                $adjustmentArray = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
        }

    }
    else if($select == 13)
    {
        switch($dieRoll)
        {
            /*0 = str, 1 = agi, 2 = sta, 3 = per, 4 = int,
            5 = AC, 6 = init, 7 = action die,
            8 = melee, 9 = missile,
            10 = ref, 11 = fort, 12 = will,
            13 = speed */
            case 0:
                $adjustmentArray = array(0, 0, 0, -4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
                break;

            case 1:
                $adjustmentArray = array(0, 0, 0, -3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
                break;

            case 2:
                $adjustmentArray = array(0, 0, 0, -2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
                break;

            case 3:
                $adjustmentArray = array(0, 0, 0, -1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
                break;

            case 4:
                $adjustmentArray = array(0, 0, 0, -1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
                break;

            default:
                $adjustmentArray = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
        }

    }
    else if($select == 14)
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

            
            default:
                $adjustmentArray = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
        }

    }
    else if($select == 15)
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

            default:
                $adjustmentArray = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
        }

    }
    else if($select == 16)
    {
        switch($dieRoll)
        {
            /*0 = str, 1 = agi, 2 = sta, 3 = per, 4 = int,
            5 = AC, 6 = init, 7 = action die,
            8 = melee, 9 = missile,
            10 = ref, 11 = fort, 12 = will,
            13 = speed */
            case 0:
                $adjustmentArray = array(0, -5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
                break;

            case 1:
                $adjustmentArray = array(0, -4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
                break;

            case 2:
                $adjustmentArray = array(0, -3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
                break;

            case 3:
                $adjustmentArray = array(0, -2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
                break;

            case 4:
                $adjustmentArray = array(0, -1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
                break;

            
            default:
                $adjustmentArray = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
        }

    }
    else if($select == 17)
    {
        switch($dieRoll)
        {
            /*0 = str, 1 = agi, 2 = sta, 3 = per, 4 = int,
            5 = AC, 6 = init, 7 = action die,
            8 = melee, 9 = missile,
            10 = ref, 11 = fort, 12 = will,
            13 = speed */
            case 0:
                $adjustmentArray = array(0, -2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
                break;

            case 1:
                $adjustmentArray = array(0, -1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
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

            default:
                $adjustmentArray = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
        }

    }
    else if($select == 18)
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

            
            default:
                $adjustmentArray = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
        }

    }
    else if($select == 19)
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

            default:
                $adjustmentArray = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
        }

    }
    else if($select == 20)
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

            
            default:
                $adjustmentArray = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
        }

    }
    else if($select == 21)
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

            default:
                $adjustmentArray = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
        }

    }
    else if($select == 22)
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

            
            default:
                $adjustmentArray = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
        }

    }
    else
    {
        $adjustmentArray = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
    }

    return $adjustmentArray;

}




?>
