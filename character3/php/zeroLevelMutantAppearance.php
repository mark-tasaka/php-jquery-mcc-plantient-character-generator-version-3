<?php

function manimalAppearance()
{
    $appearance = array("Primate: gorilla",
"Primate: chimpanzee",
"Primate: orangutan",
"Primate: gibbon",
"Canine: dog",
"Canine: wolf",
"Canine: coyote",
"Canine: fox",
"Feline: lion",
"Feline: tiger",
"Feline: cheetah",
"Feline: panther",
"Ursine: brown bear",
"Ursine: grizzly bear",
"Ursine: polar bear",
"Bovine: cow",
"Bovine: bison",
"Bovine: buffalo",
"Bovine: antelope",
"Bovine: yak",
"Suidae: pig",
"Suidae: hog",
"Suidae: wartog",
"Rodentia: mouse",
"Rodentia: rat",
"Rodentia: squirrel",
"Rodentia: porcupine",
"Rodentia: beaver",
"Rodentia: rabbit",
"Amphibia: frog",
"Amphibia: toad",
"Amphibia: salamander",
"Avian: hawk",
"Avian: eagle",
"Avian: crow",
"Avian: owl",
"Avian: vulture",
"Avian: seagull",
"Insecta: roach",
"Insecta: ant",
"Insecta: fly",
"Insecta: grasshopper",
"Insecta: beetle",
"Insecta: moth");

        shuffle($appearance);

        return $appearance[0];

}

function mutantAppearance()
{
    $appearance = array(
        "Skin colour: bright red",
        "Skin colour: snow white",
        "Skin colour: lemon yellow",
        "Skin colour: purple",
        "Skin colour: green",
        "Skin colour: translucent",
        "Skin texture: is mottled",
        "Skin texture: is reptilian",
        "Skin texture: is chitinous",
        "Skin texture: is rocky",
        "Skin texture: is metallic",
        "Skin texture: is invisible",
        "Eyes: have slitted pupils",
        "Eyes: have no pupils",
        "Eyes: glow in the dark",
        "Eyes: are a single eye",
        "Eyes: have compound insect eyes",
        "Eyes: are covered by semi-transparent skin",
        "Mouth: is fanged",
        "Mouth: a featureless slit",
        "Mouth: a break or bill",
        "Mouth: is insectoid",
        "Mouth: located in belly",
        "Mouth: absent, replaced by porous skin",
        "Head: is larger than normal",
        "Head: is smaller than normal",
        "Head: has craggy brow and ridged skull",
        "Head: has small horns",
        "Head: has antenna",
        "Head: retreats into body",
        "Hair: stands on end",
        "Hair: grows into a lion's mane",
        "Hair: grows over entire body",
        "Hair: drips oil",
        "Hair: is made of organic metal",
        "Hair: is comprised of small leaves",
        "Hands: have no nails",
        "Hands: have only three fingers",
        "Hands: have six fingers",
        "Hands: are prehensile claws",
        "Hands: are comprised of tentacles",
        "Hands: absent, replaced with tentacle fingers",
        "Feet: are overlarge and padded",
        "Feet: have 12 toes",
        "Feet: have claws",
        "Feet: are bird talons",
        "Feet: are hooves",
        "Feet: absent, replaced with cilia clumps",
        "Body: has a tail",
        "Body: has four arms",
        "Body: has four legs",
        "Body: has ridged back",
        "Body: has symbiotic twin in stomach",
        "Body: is segmented like a worm",
        "Form: is tripedal",
        "Form: is quadrapedal",
        "Form: is serpentine",
        "Form: is insectoid",
        "Form: is globular",
        "Form: is a condensed ball of plasma that must inhabit clothes to maintain form");

        shuffle($appearance);

        return $appearance[0];
}


function getManimalAppearance()
{
    $dieRoll = rand(0, 29);

    if($dieRoll < 26)
    {
        $appearance = manimalAppearance();
    }
    else
    {
        $manimalAppearance = manimalAppearance();
        $mutantAppearance = mutantAppearance();
        $appearance = $manimalAppearance . '<br/>' . $mutantAppearance;
    }

    return $appearance;
}


?>