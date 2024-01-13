<?php

namespace Database\Seeders;

use App\Models\Question;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuestionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $chemistryQuestions = [
            [
                'question' => 'Which element is represented by the symbol \'O\' in the periodic table?',
                'options' => [
                    ['text' => 'Oxygen', 'is_correct' => true],
                    ['text' => 'Osmium', 'is_correct' => false],
                    ['text' => 'Oganesson', 'is_correct' => false],
                    ['text' => 'Osmium', 'is_correct' => false],
                ],
            ],
            [
                'question' => 'Which element is the most abundant in the Earth\'s crust?',
                'options' => [
                    ['text' => 'Oxygen', 'is_correct' => false],
                    ['text' => 'Silicon', 'is_correct' => true],
                    ['text' => 'Carbon', 'is_correct' => false],
                    ['text' => 'Aluminum', 'is_correct' => false],
                ],
            ],
            [
                'question' => 'What is the atomic number of the element Hydrogen?',
                'options' => [
                    ['text' => '1', 'is_correct' => true],
                    ['text' => '2', 'is_correct' => false],
                    ['text' => '3', 'is_correct' => false],
                    ['text' => '4', 'is_correct' => false],
                ],
            ],
            [
                'question' => 'Which gas is produced by the reaction of vinegar and baking soda?',
                'options' => [
                    ['text' => 'Carbon Dioxide', 'is_correct' => true],
                    ['text' => 'Oxygen', 'is_correct' => false],
                    ['text' => 'Hydrogen', 'is_correct' => false],
                    ['text' => 'Nitrogen', 'is_correct' => false],
                ],
            ],
            [
                "question" => "What is the chemical symbol for water?",
                "options" => [
                    ["text" => "H2SO4", "is_correct" => false],
                    ["text" => "CH4", "is_correct" => false],
                    ["text" => "CO2", "is_correct" => false],
                    ["text" => "H2O", "is_correct" => true]
                ]
            ],
            [
                "question" => "What is the largest element in the periodic table?",
                "options" => [
                    ["text" => "Hydrogen", "is_correct" => false],
                    ["text" => "Oxygen", "is_correct" => false],
                    ["text" => "Uranium", "is_correct" => true],
                    ["text" => "Gold", "is_correct" => false]
                ]
            ],
            [
                "question" => "What state of matter is most compressible?",
                "options" => [
                    ["text" => "Solid", "is_correct" => false],
                    ["text" => "Liquid", "is_correct" => false],
                    ["text" => "Gas", "is_correct" => true],
                    ["text" => "Plasma", "is_correct" => false]
                ]
            ],
            [
                "question" => "What is the chemical formula for table salt?",
                "options" => [
                    ["text" => "NaCl", "is_correct" => true],
                    ["text" => "KCl", "is_correct" => false],
                    ["text" => "CaCO3", "is_correct" => false],
                    ["text" => "MgSO4", "is_correct" => false]
                ]
            ],
            [
                "question" => "What is the name of the process by which plants use sunlight to convert carbon dioxide and water into glucose and oxygen?",
                "options" => [
                    ["text" => "Photosynthesis", "is_correct" => true],
                    ["text" => "Respiration", "is_correct" => false],
                    ["text" => "Cellular respiration", "is_correct" => false],
                    ["text" => "Fermentation", "is_correct" => false]
                ]
            ],
            [
                "question" => "What is the chemical element with the atomic number 1?",
                "options" => [
                    ["text" => "Hydrogen", "is_correct" => true],
                    ["text" => "Helium", "is_correct" => false],
                    ["text" => "Lithium", "is_correct" => false],
                    ["text" => "Beryllium", "is_correct" => false]
                ]
            ],
            [
                "question" => "What is the chemical formula for baking soda?",
                "options" => [
                    ["text" => "NaHCO3", "is_correct" => true],
                    ["text" => "KHCO3", "is_correct" => false],
                    ["text" => "CaCO3", "is_correct" => false],
                    ["text" => "Na2CO3", "is_correct" => false]
                ]
            ],
            [
                "question" => "What is the name of the process by which iron rusts?",
                "options" => [
                    ["text" => "Oxidation", "is_correct" => true],
                    ["text" => "Reduction", "is_correct" => false],
                    ["text" => "Pyrolysis", "is_correct" => false],
                    ["text" => "Electrolysis", "is_correct" => false]
                ]
            ],
            [
                "question" => "What is the chemical formula for glucose?",
                "options" => [
                    ["text" => "C6H12O6", "is_correct" => true],
                    ["text" => "C5H10O5", "is_correct" => false],
                    ["text" => "C4H8O4", "is_correct" => false],
                    ["text" => "C3H6O3", "is_correct" => false]
                ]
            ],
            [
                "question" => "What is the largest element in the periodic table?",
                "options" => [
                    ["text" => "Hydrogen", "is_correct" => false],
                    ["text" => "Oxygen", "is_correct" => false],
                    ["text" => "Uranium", "is_correct" => true],
                    ["text" => "Gold", "is_correct" => false]
                ]
            ],
            [
                "question" => "What state of matter is most compressible?",
                "options" => [
                    ["text" => "Solid", "is_correct" => false],
                    ["text" => "Liquid", "is_correct" => false],
                    ["text" => "Gas", "is_correct" => true],
                    ["text" => "Plasma", "is_correct" => false]
                ]
            ],
            [
                "question" => "What is the chemical formula for table salt?",
                "options" => [
                    ["text" => "NaCl", "is_correct" => true],
                    ["text" => "KCl", "is_correct" => false],
                    ["text" => "CaCO3", "is_correct" => false],
                    ["text" => "MgSO4", "is_correct" => false]
                ]
            ],
            [
                "question" => "What is the name of the process by which plants use sunlight to convert carbon dioxide and water into glucose and oxygen?",
                "options" => [
                    ["text" => "Photosynthesis", "is_correct" => true],
                    ["text" => "Respiration", "is_correct" => false],
                    ["text" => "Cellular respiration", "is_correct" => false],
                    ["text" => "Fermentation", "is_correct" => false]
                ]
            ],
            [
                "question" => "What is the chemical element with the atomic number 1?",
                "options" => [
                    ["text" => "Hydrogen", "is_correct" => true],
                    ["text" => "Helium", "is_correct" => false],
                    ["text" => "Lithium", "is_correct" => false],
                    ["text" => "Beryllium", "is_correct" => false]
                ]
            ],
            [
                "question" => "What is the chemical formula for baking soda?",
                "options" => [
                    ["text" => "NaHCO3", "is_correct" => true],
                    ["text" => "KHCO3", "is_correct" => false],
                    ["text" => "CaCO3", "is_correct" => false],
                    ["text" => "Na2CO3", "is_correct" => false]
                ]
            ],
            [
                "question" => "What is the name of the process by which iron rusts?",
                "options" => [
                    ["text" => "Oxidation", "is_correct" => true],
                    ["text" => "Reduction", "is_correct" => false],
                    ["text" => "Pyrolysis", "is_correct" => false],
                    ["text" => "Electrolysis", "is_correct" => false]
                ]
            ],
            [
                "question" => "What is the chemical formula for glucose?",
                "options" => [
                    ["text" => "C6H12O6", "is_correct" => true],
                    ["text" => "C5H10O5", "is_correct" => false],
                    ["text" => "C4H8O4", "is_correct" => false],
                    ["text" => "C3H6O3", "is_correct" => false]
                ]
            ],
            [
                "question" => "What is the name of the smallest unit of an element that can exist independently and still retain the properties of that element?",
                "options" => [
                    ["text" => "Atom", "is_correct" => true],
                    ["text" => "Molecule", "is_correct" => false],
                    ["text" => "Compound", "is_correct" => false],
                    ["text" => "Ion", "is_correct" => false]
                ]
            ],
            [
                "question" => "What is the boiling point of water at sea level?",
                "options" => [
                    ["text" => "100°C", "is_correct" => true],
                    ["text" => "95°C", "is_correct" => false],
                    ["text" => "85°C", "is_correct" => false],
                    ["text" => "75°C", "is_correct" => false]]
            ],
            [
                "question" => "What is the main component of air?",
                "options" => [
                    ["text" => "Nitrogen", "is_correct" => true],
                    ["text" => "Oxygen", "is_correct" => false],
                    ["text" => "Carbon dioxide", "is_correct" => false],
                    ["text" => "Water vapor", "is_correct" => false]
                ]
            ],
            [
                "question" => "What is the name of the process by which oil is formed from dead organisms?",
                "options" => [
                    ["text" => "Fossilisation", "is_correct" => true],
                    ["text" => "Decomposition", "is_correct" => false],
                    ["text" => "Putrefaction", "is_correct" => false],
                    ["text" => "Combustion", "is_correct" => false]
                ]
            ],
            [
                "question" => "What is the chemical formula for sulphuric acid?",
                "options" => [
                    ["text" => "H2SO4", "is_correct" => true],
                    ["text" => "HCl", "is_correct" => false],
                    ["text" => "HNO3", "is_correct" => false],
                    ["text" => "H2CO3", "is_correct" => false]
                ]
            ],
            [
                "question" => "What is the name of the element that glows brightly in the dark?",
                "options" => [
                    ["text" => "Phosphorus", "is_correct" => true],
                    ["text" => "Sulphur", "is_correct" => false],
                    ["text" => "Chlorine", "is_correct" => false],
                    ["text" => "Sodium", "is_correct" => false]
                ]
            ],
            [
                "question" => "What is the name of the process by which metals are extracted from their ores?",
                "options" => [
                    ["text" => "Smelting", "is_correct" => true],
                    ["text" => "Electrolysis", "is_correct" => false],
                    ["text" => "Chromatography", "is_correct" => false],
                    ["text" => "Distillation", "is_correct" => false]
                ]
            ],
            [
                "question" => "What is the chemical formula for ethanol?",
                "options" => [
                    ["text" => "C2H5OH", "is_correct" => true],
                    ["text" => "CH3OH", "is_correct" => false],
                    ["text" => "C2H6O", "is_correct" => false],
                    ["text" => "CH4O", "is_correct" => false]
                ]
            ],
            [
                "question" => "What is the name of the process by which food is broken down in the body?",
                "options" => [
                    ["text" => "Digestion", "is_correct" => true],
                    ["text" => "Absorption", "is_correct" => false],
                    ["text" => "Metabolism", "is_correct" => false],
                    ["text" => "Excretion", "is_correct" => false]
                ]
            ],
            [
                "question" => "What is the name of the element that is essential for photosynthesis?",
                "options" => [
                    ["text" => "Magnesium", "is_correct" => true],
                    ["text" => "Calcium", "is_correct" => false],
                    ["text" => "Potassium", "is_correct" => false],
                    ["text" => "Sodium", "is_correct" => false]
                ]
            ],
            [
                "question" => "What is the chemical formula for ammonia?",
                "options" => [
                    ["text" => "NH3", "is_correct" => true],
                    ["text" => "NO2", "is_correct" => false],
                    ["text" => "N2O", "is_correct" => false],
                    ["text" => "NO", "is_correct" => false]
                ]
            ],
            [
                "question" => "What is the element with the highest melting point?",
                "options" => [
                    ["text" => "Tungsten", "is_correct" => true],
                    ["text" => "Iron", "is_correct" => false],
                    ["text" => "Gold", "is_correct" => false],
                    ["text" => "Copper", "is_correct" => false]
                ]
            ],
            [
                "question" => "What is the chemical symbol for helium?",
                "options" => [
                    ["text" => "He", "is_correct" => true],
                    ["text" => "H", "is_correct" => false],
                    ["text" => "Ne", "is_correct" => false],
                    ["text" => "Ar", "is_correct" => false]
                ]
            ],
            [
                "question" => "What is the process by which water changes from a liquid to a gas?",
                "options" => [
                    ["text" => "Evaporation", "is_correct" => true],
                    ["text" => "Condensation", "is_correct" => false],
                    ["text" => "Freezing", "is_correct" => false],
                    ["text" => "Melting", "is_correct" => false]
                ]
            ],
            [
                "question" => "What is the name of the process by which metals are extracted from their ores?",
                "options" => [
                    ["text" => "Smelting", "is_correct" => true],
                    ["text" => "Electrolysis", "is_correct" => false],
                    ["text" => "Distillation", "is_correct" => false],
                    ["text" => "Chromatography", "is_correct" => false]
                ]
            ],
            [
                "question" => "What is the chemical formula for calcium sulfate?",
                "options" => [
                    ["text" => "CaSO4", "is_correct" => true],
                    ["text" => "CaCO3", "is_correct" => false],
                    ["text" => "NaCl", "is_correct" => false],
                    ["text" => "MgSO4", "is_correct" => false]
                ]
            ],
            [
                "question" => "What is the name of the scientist who discovered the periodic table?",
                "options" => [
                    ["text" => "Dmitri Mendeleev", "is_correct" => true],
                    ["text" => "Marie Curie", "is_correct" => false],
                    ["text" => "Albert Einstein", "is_correct" => false],
                    ["text" => "Isaac Newton", "is_correct" => false]
                ]
            ],
            [
                "question" => "What is the chemical formula for sulfuric acid?",
                "options" => [
                    ["text" => "H2SO4", "is_correct" => true],
                    ["text" => "HNO3", "is_correct" => false],
                    ["text" => "HCl", "is_correct" => false],
                    ["text" => "NaOH", "is_correct" => false]
                ]
            ],
            [
                "question" => "What is the scientific name for table sugar?",
                "options" => [
                    ["text" => "Sucrose", "is_correct" => true],
                    ["text" => "Glucose", "is_correct" => false],
                    ["text" => "Fructose", "is_correct" => false],
                    ["text" => "Lactose", "is_correct" => false]
                ]
            ],
            [
                "question" => "What is the chemical symbol for silver?",
                "options" => [
                    ["text" => "Ag", "is_correct" => true],
                    ["text" => "Au", "is_correct" => false],
                    ["text" => "Cu", "is_correct" => false],
                    ["text" => "Fe", "is_correct" => false]
                ]
            ],
            [
                "question" => "What is the process by which plants convert food into energy?",
                "options" => [
                    ["text" => "Cellular respiration", "is_correct" => true],
                    ["text" => "Photosynthesis", "is_correct" => false],
                    ["text" => "Fermentation", "is_correct" => false],
                    ["text" => "Transpiration", "is_correct" => false]
                ]
            ],
            [
                "question" => "What is the chemical formula for methane?",
                "options" => [
                    ["text" => "CH4", "is_correct" => true],
                    ["text" => "CO2", "is_correct" => false],
                    ["text" => "H2O", "is_correct" => false],
                    ["text" => "N2", "is_correct" => false]
                ]
            ],
            [
                "question" => "What is the chemical symbol for potassium?",
                "options" => [
                    ["text" => "K", "is_correct" => true],
                    ["text" => "Na", "is_correct" => false],
                    ["text" => "Ca", "is_correct" => false],
                    ["text" => "Mg", "is_correct" => false]
                ]
            ],
            [
                "question" => "What is the process by which water changes from a gas to a liquid?",
                "options" => [
                    ["text" => "Condensation", "is_correct" => true],
                    ["text" => "Evaporation", "is_correct" => false],
                    ["text" => "Freezing", "is_correct" => false],
                    ["text" => "Melting", "is_correct" => false]
                ]
            ],
            [
                "question" => "What is the chemical formula for ammonia?",
                "options" => [
                    ["text" => "NH3", "is_correct" => true],
                    ["text" => "NO2", "is_correct" => false],
                    ["text" => "SO2", "is_correct" => false],
                    ["text" => "CO2", "is_correct" => false]
                ]
            ],
            [
                "question" => "What is the lightest element in the periodic table?",
                "options" => [
                    ["text" => "Hydrogen", "is_correct" => true],
                    ["text" => "Helium", "is_correct" => false],
                    ["text" => "Lithium", "is_correct" => false],
                    ["text" => "Oxygen", "is_correct" => false]
                ]
            ],
            [
                "question" => "What is the hardest natural substance on Earth?",
                "options" => [
                    ["text" => "Diamond", "is_correct" => true],
                    ["text" => "Gold", "is_correct" => false],
                    ["text" => "Topaz", "is_correct" => false],
                    ["text" => "Quartz", "is_correct" => false]
                ]
            ],
            [
                "question" => "Which gas is used in light bulbs to prevent the filament from burning?",
                "options" => [
                    ["text" => "Argon", "is_correct" => true],
                    ["text" => "Helium", "is_correct" => false],
                    ["text" => "Neon", "is_correct" => false],
                    ["text" => "Krypton", "is_correct" => false]
                ]
            ],
            [
                "question" => "Which metal is liquid at room temperature?",
                "options" => [
                    ["text" => "Mercury", "is_correct" => true],
                    ["text" => "Silver", "is_correct" => false],
                    ["text" => "Copper", "is_correct" => false],
                    ["text" => "Gold", "is_correct" => false]
                ]
            ]
        ];


        foreach ($chemistryQuestions as $chemistryQuestion) {
            $question = Question::create([
                'body' => $chemistryQuestion['question']
            ]);

            foreach ($chemistryQuestion['options'] as $option) {
                $question->options()->create([
                    'body' => $option['text'],
                    'is_correct' => $option['is_correct']
                ]);
            }
        }
    }
}
