<?php

function getMentalMutationName($input)
{
    //Active Mutations 0-22
    //Passive Mutations 23-25
    $mutationName = array("Cryokinesis","Death Field Generation","Devolution","Domination","Empathy","Force Field Generation","Illusion Generation","Life Force Reflection","Magnetic Control","Mind Control","Mental Blast","Mental Shield","Mental Reflection","Molecular Disruption","Molecular Integration","Pyrokinesis","Telekinesis","Telepathy","Teleportation","Temporary Invulnerability","Thought Spike","Time Sense","Time Stop","Absorption","Dual Brain","Heightened Intelligence");

    return $mutationName[$input];
}

function getMentalMutationType($input)
{
    if($input <= 22)
    {
        $type = "Active";
    }
    else
    {
        $type = "Passive";
    }

    return $type;
}



function mentalMutationManifestation($input)
{
    $a00 = array("A dense ice fog rolls off the mutant’s body.",
    "The mutant’s skin is icy blue and eyes are a cold, glazed white.",
    "The mutant’s body becomes temporarily encased in layer of snow.",
    "The mutant’s body temporarily becomes glassy, semi-transparent, and extremely cold to the touch.");

    $a01 = array("The mutant’s body is surrounded in a dark-violet nimbus.",
    "The mutant’s body exudes the ghastly smell of rotting corpses.",
    "Skin on the mutant’s head becomes temporarily transparent, exposing the skull.",
    "The mutant’s hands and arms or equivalent limbs have no flesh, and are skeletal.");

    $a02 = array("The mutant’s forehead glows a bright green.",
    "A bright green ray is projected from the mutant’s eyes.",
    "A bright green ray is projected from the mutant’s eyes.",
    "The mutant’s hands are surrounded by a glowing green aureole resembling ever-changing DNA strands.");

    $a03 = array("The mutant’s eyes glow with an intense yellow light.",
    "The mutant’s facial features become temporarily beatific.",
    "The mutant’s merest hand gesture produces sparkles in the air.",
    "A spinning hypnotic pinwheel of light appears above the mutant’s head.");

    $a04 = array("The mutant’s eyes glow warmly behind closed lids.",
    "The mutant’s head is encircled and suffused with a warm glow.",
    "The mutant’s face suddenly transforms into a semblance of the target creature.",
    "For a flickering instant, the mutant and target creature appear to exchange bodies and places.");

    $a05 = array("The mutant generates a force field that is completely invisible.",
    "The mutant generates a force screen that causes the air to ripple in a wavy pattern and hums noticeably.",
    "The mutant is surrounded by wall of translucent blue light.",
    "The mutant’s force field appears as a yellow-orange hexagonal grid that waves and undulates.");

    $a06 = array("The mutant’s eyes turn all-white.",
    "The mutant must touch the forefingers of one hand to his forehead.",
    "The mutant’s forehead appears to ripple in concentric circles.",
    "The mutant appears to be is surrounded by a rotating miasma of polychromatic chaos.");

    $a07 = array("The mutant’s appearance momentarily shimmers and sparkles.",
    "A circular field of mirroring energy appears in front of the mutant.",
    "The mutant’s body visibly distorts, bowing slightly before rebounding.",
    "The mutant’s body momentarily becomes a silhouetted doorway into another dimension.");
                    
    $a08 = array("The air ripples between the mutant and target object whenever this mutation is used.",
    "The mutant’s body is surrounded by visible magnetic lines of force when mutation is used.",
    "The mutant’s complexion darkens noticeably as the ferrous materials in his or his bloodstream align.",
    "The mutant’s body temporarily becomes metallic and chilled to the touch.");

    $a09 = array("The mutant’s head is bald, and the mutant has arched eyebrows.",
    "The mutant’s eyes appear to be momentarily lit as though by a soft spotlight, even in the dark.",
    "The mutant’s merest glance causes involuntary flinching in others.",
    "The mutant’s skull and other head tissues become momentarily transparent, revealing his or her brain.");

    $a10 = array("A narrow beam of white light shoots directly from the mutant’s forehead.",
    "A torch of jagged white energy flares from the mutant’s head.",
    "Concentric rings of white light radiate from the heads of the mutant and all of his or her targets.",
    "A piercing white noise whine emanates from the bones in the mutant’s skull.");

    $a11 = array("The mutant generates a mental shield that appears as a translucent blue-green sphere around the mutant’s head.",
    "The mutant generates a mental shield that appears as an illusory riveted metal band around the mutant’s forehead.",
    "The mutant generates a mental shield that appears as an illusory riveted metal band around the mutant’s forehead.",
    "The mutant’s mental shield manifests as numerous small, glowing crystals that orbit the mutant’s head.");

    $a12 = array("The mutant’s appearance momentarily glimmers and gleams.",
    "An octagonal field of reflective energy appears in front of the mutant.",
    "The air around the mutant’s head appears to distort, warping slightly before rebounding.",
    "The mutant’s eyes momentarily become blackened twin orbs.");

    $a13 = array("The mutant’s hands project a bright yellow ray of light that sizzles when it hits target.",
    "The mutant’s eye’s send out twin beams of searing red-orange energy that zigzags unerringly towards targets.",
    "The mutant’s forefinger casts forth a pulsating red beam that whines rhythmically.",
    "The mutant’s body momentarily flashes as a bright green silhouette revealing a photo-reversed black skeleton inside.");

    $a14 = array("The mutant’s hands glow with a bluish white light.",
    "The mutant’s hands radiate bluewhite rings of concentric energy.",
    "The mutant’s hands cast forth a pulsating blue-white light that bathes target creature or object in an angelic glow.",
    "The mutant’s entire body is bathed in a cascading shower of blue-white sparkles which gradually flow over to target creature or object.");

    $a15 = array("The mutant’s body begins to shimmer with ripples of heated air.",
    "The mutant’s body starts to glow, beginning with a dull red and eventually becoming white hot.",
    "The mutant’s body hums as he begins to broadcast microwave radiation.",
    "The mutant’s hands catch fire as they become sheathed in glowing plasma.");

    $a16 = array("Segmented lines of translucent force are visible between the mutant’s head and target object.",
    "The mutant’s head is surrounded by a translucent white sphere of energy when mutation is used.",
    "The mutant’s eyes become all-white when this mutation is used.",
    "Huge translucent hands manifest around target whenever this mutation is used.");

    $a17 = array("The irises of the mutant’s eyes vanish.",
    "The mutant’s head is encircled with a subtle white glow.",
    "The mutant’s eyebrows are arched.",
    "A shrill sonic hum fills the air.");

    $a18 = array("The ground immediately around the mutant explodes in a harmless but loud display of smoke and pyrotechnics.",
    "The teleported persons or objects slowly dissolve into a swirling cloud of golden twinkling sparkles which fade away accompanied by...",
    "The surface of the teleported persons or objects begins to crawl with tiny forked arcs of electricity as they vanish and reappear elsewhere",
    "A ring of violaceous energy grows to surround one end of the teleported persons or objects, and as it passes over them to the other end...");

    $a19 = array("The mutant’s body twinkles and sparkles subtly when attacked.",
    "All objects, including clothes and possessions, are pushed away from the mutant’s body by 1/4 inch.",
    "All objects, including clothes and possessions, are pushed away from the mutant’s body by 1/4 inch.",
    "For a microsecond the mutant’s body appears to shift into a sideways dimension.");

    $a20 = array("Transparent red bands of ribboned energy rotate around the mutant’s head in elliptical patterns.",
    "The mutant’s head appears to enveloped in a jet of cool red flames, obscuring all of his facial features.",
    "The mutant’s head appears to transform into a red ruby-like material.",
    "An ethereal red armet appears around the mutant’s head.");

    $a21 = array( "The mutant’s face appears to blur horizontally as his eyes glow with a deep crimson light.",
    "The mutant becomes semi-transparent as his form appears to revolve vertically around a central axis (does not effect the true...",
    "The mutant becomes semi-transparent as his form appears to revolve vertically around a central axis (does not effect the true...",
    "Whenever the mutant moves while this mutation is activated, his physical form appears to strobe into three identical forms...");

    $a22 = array("Target color-shifts towards the red spectrum.",
    "Target is surrounded by a shifting waves of banded color.",
    "Target becomes a black silhouette of no-light.",
    "Target’s form blurs but freezes in place.");

    $a23 = array("The mutant skin ripples each time he is struck.",
    "The mutant’s complexion deepens and he appears healthier.",
    "The air around the mutant’s body shimmers when attacked.",
    "The mutant is suffused in a warm pink glow.");

    $a24 = array("The mutant’s second brain is located in a large and pronounced bump in the forehead of the skull.",
    "The mutant’s second brain is located at the base of the spine or equivalent body form.",
    "The mutant’s second brain is located in a second head.",
    "The mutant’s second brain is located in a small malformed twin that is embedded in the mutant’s chest.");

    $a25 = array("The mutant’s head is overlarge with an extended, tall forehead.",
    "The mutant’s head is bald and body is hairless.",
    "The mutant’s body beneath the neck is notably atrophied.",
    "The mutant appears to be a far-future highly-evolved version, with slender body, slight facial features, and overlarge head and eyes.");


    $array1= array($a00, $a01, $a02, $a03, $a04, $a05, $a06, $a07, $a08, $a09, $a10, $a11, $a12, $a13, $a14, $a15, $a16, $a17, $a18, $a19, $a20, $a21, $a22, $a23, $a24, $a25);
    
    return $array1[$input];
    
}

function getMentalMutationManifestation($input)
{
    $dieRoll = rand(0, 3);

    $mentalMutaton = mentalMutationManifestation($input)[$dieRoll];

    return $mentalMutaton;
}




function mentalMutationActiveEffect($input)
{
    $a00 = array("Failure, mutation results in cosmetic change only; mutant appears to roll with the punches exceptionally well.",
                "The mutant absorbs kinetic energy; takes only 1/2 damage from normal melee and missile attacks",
                "The mutant absorbs kinetic energy; takes only 1/2 damage from normal melee and missile attacks",
                "The mutant absorbs kinetic energy; takes only 1/2 damage from normal melee and missile attacks and gains 1d3 hp (up to hp max) from each attack.",
                "The mutant absorbs kinetic energy; takes only 1/2 damage from normal melee and missile attacks and gains 1d6 hp (up to hp max) from each attack.",
                "The mutant absorbs kinetic energy; takes 1/2 damage from normal melee and missile attacks and gains 1 HD in hp (up to hp max) from each attack.");

    $a01 = array("Failure, mutation results in cosmetic change only; mutant has non-functional second brain.",
                "The mutant’s Intelligence score increases by +2.",
                "The mutant’s Intelligence score increases by +3; gains additional +1 to Willpower saves.",
                "The mutant’s Intelligence score increases by +2.",
                "The mutant’s Intelligence score increases by +3; gains additional +1 to Willpower saves.",
                "The mutant’s Intelligence score increases by +4; gains additional +2 to Willpower saves.");

    $a02 = array("Failure, mutation results in a cosmetic change only: mutant appears to be a big-headed know-it-all.",
                "The mutant’s Intelligence score is increased by +1.",
                "The mutant’s Intelligence score is increased by +2.",
                "The mutant’s Intelligence score is increased by +3.",
                "The mutant’s Intelligence score is increased by +4; Artifact checks succeed automatically up to tech level 2.",
                "The mutant’s Intelligence score is increased by +5; Artifact checks succeed automatically up to tech level 3.");



    $array1= array($a00, $a01, $a02);
    
    return $array1[$input];
    
}


function getMentalMutationEffect($input, $dieRoll)
{
    $select = ($input - 23);

    $effect = mentalMutationActiveEffect($select)[$dieRoll];

    return $effect;
}



function getMentalMutationAdjustments($input, $dieRoll)
{
    $select = ($input - 23);
    //$adjustmentArray = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
    //$adjustmentArray = array();

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
                $adjustmentArray = array(0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0);
                break;

            case 2:
                $adjustmentArray = array(0, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 1, 0);
                break;

            case 3:
                $adjustmentArray = array(0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0);
                break;

            case 4:
                $adjustmentArray = array(0, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 1, 0);
                break;

            case 5:
                $adjustmentArray = array(0, 0, 0, 0, 4, 0, 0, 0, 0, 0, 0, 0, 2, 0);
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
                $adjustmentArray = array(0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0);
                break;

            case 2:
                $adjustmentArray = array(0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0);
                break;

            case 3:
                $adjustmentArray = array(0, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0);
                break;

            case 4:
                $adjustmentArray = array(0, 0, 0, 0, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0);
                break;

            case 5:
                $adjustmentArray = array(0, 0, 0, 0, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0);
                break;
            
            default:
                $adjustmentArray = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
        }

    }

    return $adjustmentArray;

}



?>