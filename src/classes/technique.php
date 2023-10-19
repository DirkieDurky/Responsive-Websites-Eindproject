<?php

$techniques = [
    new Technique("dash-tech", "Superdash (Super)", "../../assets/techniques/super-dash.gif"),
    new Technique("dash-tech", "Hyperdash (Hyper)"),
    new Technique("dash-tech", "Wavedash", "../../assets/techniques/wallbouncing.gif"),
    new Technique("dash-tech", "Ultradash (Ultra)"),
    new Technique("dash-tech", "Demodash (Demo)"),
    new Technique("dash-tech", "Wallbounce (wb)", "../../assets/techniques/wavedash.gif"),
    new Technique("dashless-tech", "Bunnyhop (Bhop)"),
    new Technique("dashless-tech", "Cornerkick"),
    new Technique("dashless-tech", "Crouch Jump (Crouch Climb)"),
    new Technique("dashless-tech", "Neutral Jump (Neutral)", "../../assets/techniques/neutral-jumping.gif"),
    new Technique("dashless-tech", "5 Jump"),
    new Technique("dashless-tech", "Cornerboost (cb)"),
    new Technique("dashless-tech", "Throwable Backboost (Backboost)"),
];

class Technique
{
    /** The type of this technique. */
    public readonly string $type;
    /** The name of this technique. */
    public readonly string $name;
    /** Possibly a gif showcasing the technique */
    public readonly ?string $gifPath;

    public function __construct(string $type, string $name, ?string $gifPath = null)
    {
        $this->type = $type;
        $this->name = $name;
        $this->gifPath = $gifPath;
    }
}
