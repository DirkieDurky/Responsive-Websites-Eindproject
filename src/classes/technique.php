<?php

$techniques = [
    new Technique("dash-tech", "Superdash (Super)", "Superdash", "../../assets/techniques/super-dash.gif"),
    new Technique("dash-tech", "Hyperdash (Hyper)", "Hyperdash"),
    new Technique("dash-tech", "Wavedash", "Wavedash", "../../assets/techniques/wallbouncing.gif"),
    new Technique("dash-tech", "Ultradash (Ultra)", "Ultradash"),
    new Technique("dash-tech", "Demodash (Demo)", "Demodash"),
    new Technique("dash-tech", "Wallbounce (wb)", "Wallbounce", "../../assets/techniques/wavedash.gif"),
    new Technique("dashless-tech", "Bunnyhop (Bhop)", "Bunnyhop"),
    new Technique("dashless-tech", "Cornerkick", "Cornerkick"),
    new Technique("dashless-tech", "Crouch Jump / Crouch Climb", "Crouch-Jump"),
    new Technique("dashless-tech", "Neutral Jump (Neutral)", "Neutral-Jump", "../../assets/techniques/neutral-jumping.gif"),
    new Technique("dashless-tech", "5 Jump", "5-Jump"),
    new Technique("dashless-tech", "Cornerboost (cb)", "Cornerboost"),
    new Technique("dashless-tech", "Throwable Backboost (Backboost)", "Throwable-Backboost"),
];

class Technique
{
    /** The type of this technique. */
    public readonly string $type;
    /** The name of this technique. */
    public readonly string $name;
    /** The title of this technique. Used as the html file name and in the header*/
    public readonly string $title;
    /** Possibly a gif showcasing the technique */
    public readonly ?string $gifPath;

    public function __construct(string $type, string $name, string $title, ?string $gifPath = null)
    {
        $this->type = $type;
        $this->name = $name;
        $this->title = $title;
        $this->gifPath = $gifPath;
    }
}
