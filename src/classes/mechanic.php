<?php

$mechanics = [
    new Mechanic("Disappearing Platforms", "all", ["1", "2", "3", "4", "5", "6", "7", "8", "9"]),
    new Mechanic("One-Way Platforms", "all", ["1", "2", "3", "4", "5", "6", "7", "8", "9"]),
    new Mechanic("Cassette Block", "all", ["1", "2", "3", "4", "5", "6", "7", "8", "9"]),
    new Mechanic("Cassette Tape", "all", ["1", "2", "3", "4", "5", "6", "7", "8"]),
    new Mechanic("Crystal Heart", "all", ["1", "2", "3", "4", "5", "6", "7", "8", "9"]),
    new Mechanic("Dash Refills", "all", ["1", "2", "3", "4", "5", "6", "7", "8", "9"]),
    new Mechanic("Spikes", "all", ["1", "2", "3", "4", "5", "6", "7", "8", "9"]),
    new Mechanic("Springs", "all", ["1", "2", "3", "4", "5", "6", "7", "8", "9"]),
    new Mechanic("Golden Berry", "all", ["1", "2", "3", "4", "5", "6", "7", "8", "9"]),
    new Mechanic("Falling Blocks", "all", ["1", "2", "3", "4", "5", "6", "7", "8", "9"]),
    new Mechanic("Traffic Block", "1", ["1", "2", "7", "8B", "8C", "9"]),
    new Mechanic("Badeline Chasers", "2", ["2"]),
    new Mechanic("Dream Blocks", "2", ["2", "7", "8B", "8C", "9"]),
    new Mechanic("Touch Switches", "2", ["1B", "2", "3", "4", "5", "6", "7", "8", "9"]),
    new Mechanic("Touch Switch Platforms", "2", ["1B", "2", "3", "4", "5", "6", "7", "8", "9"]),
    new Mechanic("Clutter", "3", ["3"]),
    new Mechanic("Clutter Switch", "3", ["3"]),
    new Mechanic("Dust Bunnies", "3", ["3", "7", "9"]),
    new Mechanic("Dust Triggers", "3", ["3", "7", "9"]),
    new Mechanic("Key", "3", ["3", "5", "7", "9"]),
    new Mechanic("Lock", "3", ["3", "5", "7", "9"]),
    new Mechanic("Water", "3", ["3", "4", "6"]),
    new Mechanic("Sinking Platforms", "3", ["3", "7"]),
    new Mechanic("Moving Platforms", "3", ["3", "4", "7", "8B"]),
    new Mechanic("Clouds", "4", ["4", "7", "8B", "9"]),
    new Mechanic("Green Bubble", "4", ["4", "7", "9"]),
    new Mechanic("Moving Block", "4", ["4", "7", "9"]),
    new Mechanic("Snowball", "4", ["4", "7"]),
    new Mechanic("Spinners", "4", ["4", "5", "6", "7", "8", "9"]),
    new Mechanic("Wind", "4", ["4", "7", "9"]),
    new Mechanic("Dash Platform", "5", ["5", "7", "8B", "8C", "9"]),
    new Mechanic("Dash Switch", "5", ["5", "7", "9"]),
    new Mechanic("Red Bubble", "5", ["5", "7"]),
    new Mechanic("Seeker", "5", ["5"]),
    new Mechanic("Temple gate (gold)", "5", ["5"]),
    new Mechanic("Temple gate (gray)", "5", ["5", "7", "9"]),
    new Mechanic("Theo Crystal", "5", ["5"]),
    new Mechanic("Barriers", "5", ["5", "9"]),
    new Mechanic("Blades", "5", ["5", "7", "9"]),
    new Mechanic("Blue Torch", "5", ["5"]),
    new Mechanic("Badeline Orb", "6", ["6", "7", "8", "9"]),
    new Mechanic("Bumpers", "6", ["6", "8"]),
    new Mechanic("Feather", "6", ["6", "7", "8", "9"]),
    new Mechanic("Kevin", "6", ["6", "8B", "8C", "9"]),
    new Mechanic("Checkpoint Flags", "7", ["7"]),
    new Mechanic("Fireball", "8", ["8", "9"]),
    new Mechanic("Fire Platform", "8", ["8", "9"]),
    new Mechanic("Ice Ball", "8", ["8", "9"]),
    new Mechanic("Ice Platform", "8", ["8"]),
    new Mechanic("Ice Wall", "8", ["8", "9"]),
    new Mechanic("Intro car", "8", ["8", "9"]),
    new Mechanic("Starjump Blocks", "8", ["8", "9"]),
    new Mechanic("Conveyor Wall", "8", ["8", "9"]),
    new Mechanic("Core Switches", "8", ["8"]),
    new Mechanic("Crystal Heart Gate", "8", ["8", "9"]),
    new Mechanic("Dash Refills", "9", ["9"]),
    new Mechanic("Electricity", "9", ["9"]),
    new Mechanic("Electric Box", "9", ["9"]),
    new Mechanic("Jellyfish", "9", ["9"]),
    new Mechanic("Pufferfish", "9", ["9"]),
    new Mechanic("Bird", "9", ["9"]),
];

class Mechanic
{
    /** The name of this mechanic. */
    public readonly string $name;
    /** The first chapter you encounter this mechanic assuming you first play all A-sides.
     * Can also contain "all" if this is a mechanic used in chapter 1 through. 8 */
    public readonly string $home;
    /** All the chapters this is contained in.
     * If it's contained in the A-side (Regardless of B and C) give the number e.g. "6", otherwise give Sides separated by "&" e.g. "8B & 8C"
     */
    public readonly array $chapters;

    public function __construct(string $name, string $home, array $chapters)
    {
        $this->name = $name;
        $this->home = $home;
        $this->chapters = $chapters;
    }
}
