<?php

namespace Database\Seeders;

use App\Enums\DifficultyLevel;
use App\Enums\ExamBody;
use App\Models\Option;
use App\Models\Question;
use App\Models\Subject;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

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
                    [
                        'text' => 'Oxygen',
                        'is_correct' => true,
                        'explanation' => 'Correct! The element represented by the symbol \'O\' in the periodic table is Oxygen. Oxygen is a chemical element with the symbol O and atomic number 8. It is a member of the chalcogen group on the periodic table, a highly reactive nonmetal, and an oxidizing agent that readily forms oxides with most elements as well as with other compounds.'
                    ],
                    [
                        'text' => 'Osmium',
                        'is_correct' => false,
                        'explanation' => 'Incorrect! The element represented by the symbol \'O\' in the periodic table is Oxygen. Osmium instead is represented by the symbol \'Os\' in the periodic table. Osmium is a chemical element with the symbol Os and atomic number 76.'
                    ],
                    [
                        'text' => 'Oganesson',
                        'is_correct' => false,
                        'explanation' => 'Nope! The element represented by the symbol \'O\' in the periodic table is Oxygen. Oganesson instead is represented by the symbol \'Og\' in the periodic table. Oganesson is a synthetic chemical element with the symbol Og and atomic number 118.'
                    ],
                    [
                        'text' => 'Osmium',
                        'is_correct' => false,
                        'explanation' => 'Incorrect! The element represented by the symbol \'O\' in the periodic table is Oxygen. Osmium instead is represented by the symbol \'Os\' in the periodic table. Osmium is a chemical element with the symbol Os and atomic number 76.'
                    ],
                ],
                'source_exam' => ExamBody::JAMB,
                'source_year' => 2021,
                'difficulty_level' => DifficultyLevel::Beginner,
            ],
            [
                'question' => 'Which element is the most abundant in the Earth\'s crust?',
                'options' => [
                    [
                        'text' => 'Oxygen',
                        'is_correct' => true,
                        'explanation' => 'Bravo! Oxygen is the most abundant element in the Earth\'s crust, making up about 46.6% of the Earth\'s crust by mass.'
                    ],
                    [
                        'text' => 'Silicon',
                        'is_correct' => false,
                        'explanation' => 'Incorrect! While Silicon is a major component of the Earth\'s crust (27.7% by mass), it is not the most abundant element. Oxygen is the most abundant element in the Earth\'s crust, making up about 46.6% of the Earth\'s crust by mass.'
                    ],
                    [
                        'text' => 'Carbon',
                        'is_correct' => false,
                        'explanation' => 'Ouch! Not even close, Carbon is the least among these. It makes up just 0.032% of the Earth\'s crust by mass, unlike Oxygen which is the most abundant element in the Earth\'s crust, making up about 46.6% of the Earth\'s crust by mass.'
                    ]
                    ,
                    [
                        'text' => 'Aluminum',
                        'is_correct' => false,
                        'explanation' => 'Nope! Aluminum is not the most abundant element in the Earth\'s crust. It makes up about 8.23% of the Earth\'s crust by mass, unlike Oxygen which is the most abundant element in the Earth\'s crust, making up about 46.6% of the Earth\'s crust by mass.',
                    ],
                ],
                'source_exam' => ExamBody::JAMB,
                'source_year' => 2021,
                'difficulty_level' => DifficultyLevel::Amateur,
            ],
            [
                'question' => 'What is the atomic number of the element Hydrogen?',
                'options' => [
                    [
                        'text' => '1',
                        'is_correct' => true,
                        'explanation' => 'Correct! The atomic number of the element Hydrogen is 1. It is the lightest and most abundant chemical element in the universe.'
                    ],
                    [
                        'text' => '2',
                        'is_correct' => false,
                        'explanation' => 'Close, but not quite! The atomic number of the element Hydrogen is 1. It is the lightest and most abundant chemical element in the universe.'
                    ],
                    [
                        'text' => '3',
                        'is_correct' => false,
                        'explanation' => 'Wrong! The element with atomic number 3 is Lithium, not Hydrogen. The atomic number of the element Hydrogen is 1. It is the lightest and most abundant chemical element in the universe.'
                    ],
                    [
                        'text' => '4',
                        'is_correct' => false,
                        'explanation' => 'Nope! The element with atomic number 4 is Beryllium, not Hydrogen. The atomic number of the element Hydrogen is 1. It is the lightest and most abundant chemical element in the universe.'
                    ],
                ],
                'source_exam' => ExamBody::JAMB,
                'source_year' => 2021,
                'difficulty_level' => DifficultyLevel::Advanced,
            ],
            [
                'question' => 'Which gas is produced by the reaction of vinegar and baking soda?',
                'options' => [
                    [
                        'text' => 'Carbon Dioxide',
                        'is_correct' => true,
                        'explanation' => 'Correct! The reaction of vinegar (acetic acid) and baking soda (sodium bicarbonate) produces carbon dioxide gas. This is a classic example of an acid-base reaction.'
                    ],
                    [
                        'text' => 'Oxygen',
                        'is_correct' => false,
                        'explanation' => 'Incorrect! The reaction of vinegar and baking soda does not produce oxygen gas. It produces carbon dioxide gas.'
                    ],
                    [
                        'text' => 'Hydrogen',
                        'is_correct' => false,
                        'explanation' => 'Nope! The reaction of vinegar and baking soda does not produce hydrogen gas. It produces carbon dioxide gas.'
                    ],
                    [
                        'text' => 'Nitrogen',
                        'is_correct' => false,
                        'explanation' => 'Wrong! The reaction of vinegar and baking soda does not produce nitrogen gas. It produces carbon dioxide gas.'
                    ],
                ],
                'source_exam' => ExamBody::JAMB,
                'source_year' => 2021,
                'difficulty_level' => DifficultyLevel::Intermediate,
            ],
            [
                "question" => "What is the chemical symbol for water?",
                "options" => [
                    [
                        "text" => "H2SO4",
                        "is_correct" => false,
                        "explanation" => "Nope! H2SO4 is the chemical formula for sulfuric acid, not water. The chemical symbol for water is H2O."
                    ],
                    [
                        "text" => "CH4",
                        "is_correct" => false,
                        "explanation" => "Incorrect! CH4 is the chemical formula for methane, not water. The chemical symbol for water is H2O."
                    ],
                    [
                        "text" => "CO2",
                        "is_correct" => false,
                        "explanation" => "Wrong! CO2 is the chemical formula for carbon dioxide, not water. The chemical symbol for water is H2O."
                    ],
                    [
                        "text" => "H2O",
                        "is_correct" => true,
                        "explanation" => 'That\'s right! The chemical symbol for water is H2O. It consists of two hydrogen atoms and one oxygen atom.'
                    ]
                ],
                'source_exam' => ExamBody::JAMB,
                'source_year' => 2021,
                'difficulty_level' => DifficultyLevel::Advanced,
            ],
            [
                "question" => "What is the largest element in the periodic table?",
                "options" => [
                    [
                        "text" => "Hydrogen",
                        "is_correct" => false,
                        "explanation" => 'That\'s far from the truth! Hydrogen is the lightest element in the periodic table, not the largest. The largest element in the periodic table is Uranium.'
                    ],
                    [
                        "text" => "Oxygen",
                        "is_correct" => false,
                        "explanation" => 'Incorrect! Oxygen isn\'t the largest element, that title goes to Uranium. Uranium is the largest element in the periodic table.'
                    ],
                    [
                        "text" => "Uranium",
                        "is_correct" => true,
                        "explanation" => 'Yes, absolutely! Uranium is the largest element in the periodic table. It has an atomic number of 92.'
                    ],
                    [
                        "text" => "Gold",
                        "is_correct" => false,
                        "explanation" => 'Nope! While Gold is a precious metal, it is not the largest element in the periodic table. Uranium holds that title.'
                    ]
                ],
                'source_exam' => ExamBody::WAEC,
                'source_year' => 2021,
                'difficulty_level' => DifficultyLevel::Beginner,
            ],
            [
                "question" => "What state of matter is most compressible?",
                "options" => [
                    [
                        "text" => "Solid",
                        "is_correct" => false,
                        "explanation" => 'Incorrect! Solids are not very compressible. The state of matter that is most compressible is Gas.'
                    ],
                    [
                        "text" => "Liquid",
                        "is_correct" => false,
                        "explanation" => 'Nope! While liquids are more compressible than solids, they are not the most compressible state of matter. The most compressible state of matter is Gas.'
                    ],
                    [
                        "text" => "Gas",
                        "is_correct" => true,
                        "explanation" => 'Correct! Gases are the most compressible state of matter. They can be compressed to occupy a smaller volume.'
                    ],
                    [
                        "text" => "Plasma",
                        "is_correct" => false,
                        "explanation" => 'Incorrect! While plasmas are compressible, gases are the most compressible state of matter.'
                    ]
                ],
                'source_exam' => ExamBody::WAEC,
                'source_year' => 2021,
                'difficulty_level' => DifficultyLevel::Amateur,
            ],
            [
                "question" => "What is the chemical formula for table salt?",
                "options" => [
                    [
                        "text" => "NaCl",
                        "is_correct" => true,
                        "explanation" => 'Correct! The chemical formula for table salt is NaCl. It consists of one sodium atom and one chlorine atom.'
                    ],
                    [
                        "text" => "KCl",
                        "is_correct" => false,
                        "explanation" => 'Incorrect! KCl is the chemical formula for potassium chloride, not table salt. The chemical formula for table salt is NaCl.'
                    ],
                    [
                        "text" => "CaCO3",
                        "is_correct" => false,
                        "explanation" => 'No way! CaCO3 is the chemical formula for calcium carbonate, not table salt. The chemical formula for table salt is NaCl.'
                    ],
                    [
                        "text" => "MgSO4",
                        "is_correct" => false,
                        "explanation" => 'Wrong! MgSO4 is the chemical formula for magnesium sulfate, not table salt. The chemical formula for table salt is NaCl.'
                    ]
                ],
                'source_exam' => ExamBody::WAEC,
                'source_year' => 2021,
                'difficulty_level' => DifficultyLevel::Intermediate,
            ],
            [
                "question" => "What is the name of the process by which plants use sunlight to convert carbon dioxide and water into glucose and oxygen?",
                "options" => [
                    [
                        "text" => "Photosynthesis",
                        "is_correct" => true,
                        "explanation" => 'Correct! Photosynthesis is essential for the survival of plants and other living organisms.'
                    ],
                    [
                        "text" => "Respiration",
                        "is_correct" => false,
                        "explanation" => 'Incorrect! The right answer is Photosynthesis. Respiration is sort of the opposite of photosynthesis, involving the breakdown of glucose to release energy.'
                    ],
                    [
                        "text" => "Cellular respiration",
                        "is_correct" => false,
                        "explanation" => 'Nope! The correct answer is Photosynthesis. Cellular respiration is the process by which cells break down glucose to release energy.'
                    ],
                    [
                        "text" => "Fermentation",
                        "is_correct" => false,
                        "explanation" => 'Wrong! The correct answer is Photosynthesis. Fermentation is an anaerobic process that produces energy without the need for oxygen.'
                    ]
                ],
                'source_exam' => ExamBody::WAEC,
                'source_year' => 2021,
                'difficulty_level' => DifficultyLevel::Advanced,
            ],
            [
                "question" => "What is the chemical element with the atomic number 1?",
                "options" => [
                    [
                        "text" => "Hydrogen",
                        "is_correct" => true,
                        "explanation" => 'Correct! Hydrogen is the chemical element with the atomic number 1. It is the lightest and most abundant chemical element in the universe.'
                    ],
                    [
                        "text" => "Helium",
                        "is_correct" => false,
                        "explanation" => 'Incorrect! Helium is the chemical element with the atomic number 2, not 1. The element with the atomic number 1 is Hydrogen.'
                    ],
                    [
                        "text" => "Lithium",
                        "is_correct" => false,
                        "explanation" => 'Nope! Lithium is the chemical element with the atomic number 3, not 1. The element with the atomic number 1 is Hydrogen.'
                    ],
                    [
                        "text" => "Beryllium",
                        "is_correct" => false,
                        "explanation" => 'Wrong! Beryllium is the chemical element with the atomic number 4, not 1. The element with the atomic number 1 is Hydrogen.'
                    ]
                ],
                'source_exam' => ExamBody::WAEC,
                'source_year' => 2021,
                'difficulty_level' => DifficultyLevel::SuperAdvanced,
            ],
            [
                "question" => "What is the chemical formula for baking soda?",
                "options" => [
                    [
                        "text" => "NaHCO3",
                        "is_correct" => true,
                        "explanation" => 'Correct! The chemical formula for baking soda is NaHCO3. It is also known as sodium bicarbonate - a white solid that is crystalline but often appears as a fine powder.'
                    ],
                    [
                        "text" => "KHCO3",
                        "is_correct" => false,
                        "explanation" => 'Incorrect! KHCO3 is the chemical formula for potassium bicarbonate, not baking soda. The chemical formula for baking soda is NaHCO3.'
                    ],
                    [
                        "text" => "CaCO3",
                        "is_correct" => false,
                        "explanation" => 'No way! CaCO3 is the chemical formula for calcium carbonate, not baking soda. The chemical formula for baking soda is NaHCO3.'
                    ],
                    [
                        "text" => "Na2CO3",
                        "is_correct" => false,
                        "explanation" => 'Wrong! Na2CO3 is the chemical formula for sodium carbonate, not baking soda. The chemical formula for baking soda is NaHCO3.'
                    ]
                ],
                'source_exam' => ExamBody::NECO,
                'source_year' => 2021,
                'difficulty_level' => DifficultyLevel::Beginner,
            ],
            [
                "question" => "What is the name of the process by which iron rusts?",
                "options" => [
                    [
                        "text" => "Oxidation",
                        "is_correct" => true,
                        "explanation" => 'Correct! Oxidation involves the loss of electrons by a molecule, atom, or ion. Rusting is a common example of oxidation.'
                    ],
                    [
                        "text" => "Reduction",
                        "is_correct" => false,
                        "explanation" => 'Incorrect! The process by which iron rusts is "oxidation", not reduction. While oxidation involves the loss of electrons, reduction involves the gain of electrons.'
                    ],
                    [
                        "text" => "Pyrolysis",
                        "is_correct" => false,
                        "explanation" => 'You\'re close, but not quite! Pyrolysis is a chemical process that involves the decomposition of organic materials by heat in the absence of oxygen. The process by which iron rusts is "oxidation".'
                    ],
                    [
                        "text" => "Electrolysis",
                        "is_correct" => false,
                        "explanation" => 'Nope! Electrolysis is a process that uses an electric current to drive a non-spontaneous chemical reaction. The process by which iron rusts is "oxidation".'
                    ]
                ],
                'source_exam' => ExamBody::NECO,
                'source_year' => 2021,
                'difficulty_level' => DifficultyLevel::Amateur,
            ],
            [
                "question" => "What is the chemical formula for glucose?",
                "options" => [
                    [
                        "text" => "C6H12O6",
                        "is_correct" => true,
                        "explanation" => 'Absolutely! The chemical formula for glucose is C6H12O6. It is a simple sugar that is an important source of energy in living organisms.'
                    ],
                    [
                        "text" => "C5H10O5",
                        "is_correct" => false,
                        "explanation" => 'Incorrect! C5H10O5 is not the chemical formula for glucose. The correct chemical formula for glucose is C6H12O6.'
                    ],
                    [
                        "text" => "C4H8O4",
                        "is_correct" => false,
                        "explanation" => 'Wrong! C4H8O4 is not the chemical formula for glucose. The correct chemical formula for glucose is C6H12O6.'
                    ],
                    [
                        "text" => "C3H6O3",
                        "is_correct" => false,
                        "explanation" => 'Looks like it rings a bell, but it\'s not correct! It\'s not C3H6O3. The correct chemical formula for glucose is C6H12O6.'
                    ]
                ],
                'source_exam' => ExamBody::NECO,
                'source_year' => 2021,
                'difficulty_level' => DifficultyLevel::Intermediate,
            ],
            [
                "question" => "What is the name of the smallest unit of an element that can exist independently and still retain the properties of that element?",
                "options" => [
                    [
                        "text" => "Atom",
                        "is_correct" => true,
                        "explanation" => 'Correct! An atom is so small that it cannot be seen with the naked eye, yet it is the basic building block of all matter.'
                    ],
                    [
                        "text" => "Molecule",
                        "is_correct" => false,
                        "explanation" => 'Incorrect! A molecule is made up of two or more atoms bonded together. The smallest unit of an element that can exist independently is an atom.'
                    ],
                    [
                        "text" => "Compound",
                        "is_correct" => false,
                        "explanation" => 'Nope! A compound is made up of two or more different elements chemically bonded together. The smallest unit of an element that can exist independently is an atom.'
                    ],
                    [
                        "text" => "Ion",
                        "is_correct" => false,
                        "explanation" => 'You\'re close, but not quite! An ion is an atom or molecule that has a net electric charge due to the loss or gain of one or more electrons. The smallest unit of an element that can exist independently is an atom.'
                    ]
                ],
                'source_exam' => ExamBody::NECO,
                'source_year' => 2021,
                'difficulty_level' => DifficultyLevel::Advanced,
            ],
            [
                "question" => "What is the boiling point of water at sea level?",
                "options" => [
                    [
                        "text" => "100°C",
                        "is_correct" => true,
                        "explanation" => 'Perfecto! The boiling point of water at sea level is 100°C (212°F), that is of course if it\'s not contaminated.'
                    ],
                    [
                        "text" => "95°C",
                        "is_correct" => false,
                        "explanation" => 'Incorrect! The boiling point of water at sea level is 100°C (212°F), not 95°C.'
                    ],
                    [
                        "text" => "85°C",
                        "is_correct" => false,
                        "explanation" => 'Nope! The boiling point of water at sea level is 100°C (212°F), not 85°C.'
                    ],
                    [
                        "text" => "75°C",
                        "is_correct" => false,
                        "explanation" => 'Wrong! The boiling point of water at sea level is 100°C (212°F), not 75°C.'
                    ]
                ],
                'source_exam' => ExamBody::NECO,
                'source_year' => 2021,
                'difficulty_level' => DifficultyLevel::SuperAdvanced,
            ],
            [
                "question" => "What is the main component of air?",
                "options" => [
                    [
                        "text" => "Nitrogen",
                        "is_correct" => true,
                        "explanation" => 'Correct! Nitrogen is the main component of air, making up about 78% of the Earth\'s atmosphere.'
                    ],
                    [
                        "text" => "Oxygen",
                        "is_correct" => false,
                        "explanation" => 'Most people think so, but it\'s not correct! While Oxygen is essential for life, it is not the main component of air. Nitrogen is the main component of air, making up about 78% of the Earth\'s atmosphere.'
                    ],
                    [
                        "text" => "Carbon dioxide",
                        "is_correct" => false,
                        "explanation" => 'Nope! Carbon dioxide is a minor component of air, making up about 0.04% of the Earth\'s atmosphere. Nitrogen is the main component of air (a whopping 78%).'
                    ],
                    [
                        "text" => "Water vapor",
                        "is_correct" => false,
                        "explanation" => 'Wrong! Water vapor is a variable component of air, not the main component. Nitrogen is the main component of air, making up about 78% of the Earth\'s atmosphere.'
                    ]
                ],
                'source_exam' => ExamBody::WAEC,
                'source_year' => 2020,
                'difficulty_level' => DifficultyLevel::Beginner,
            ],
            [
                "question" => "What is the name of the process by which oil is formed from dead organisms?",
                "options" => [
                    [
                        "text" => "Fossilisation",
                        "is_correct" => true,
                        "explanation" => 'Correct! Fossilisation is the process by which oil is formed from dead organisms. You must have watched a lot of documentaries.'
                    ],
                    [
                        "text" => "Decomposition",
                        "is_correct" => false,
                        "explanation" => 'Incorrect! Decomposition is the process by which organic matter is broken down into simpler substances. The process by which oil is formed from dead organisms is fossilisation.'
                    ],
                    [
                        "text" => "Putrefaction",
                        "is_correct" => false,
                        "explanation" => 'Nope! Putrefaction is the process by which organic matter decays and produces a foul smell. The process by which oil is formed from dead organisms is fossilisation.'
                    ],
                    [
                        "text" => "Combustion",
                        "is_correct" => false,
                        "explanation" => 'Wrong! Combustion is the process of burning something. The process by which oil is formed from dead organisms is fossilisation.'
                    ]
                ],
                'source_exam' => ExamBody::WAEC,
                'source_year' => 2020,
                'difficulty_level' => DifficultyLevel::Amateur,
            ],
            [
                "question" => "What is the chemical formula for sulphuric acid?",
                "options" => [
                    [
                        "text" => "H2SO4",
                        "is_correct" => true,
                        "explanation" => 'Absolutely! The chemical formula for sulphuric acid is H2SO4. It is a strong mineral acid with the formula H2SO4.'
                    ],
                    [
                        "text" => "HCl",
                        "is_correct" => false,
                        "explanation" => 'Incorrect! HCl is the chemical formula for hydrochloric acid, not sulphuric acid. The chemical formula for sulphuric acid is H2SO4.'
                    ],
                    [
                        "text" => "HNO3",
                        "is_correct" => false,
                        "explanation" => 'No way! HNO3 is the chemical formula for nitric acid, not sulphuric acid. The chemical formula for sulphuric acid is H2SO4.'
                    ],
                    [
                        "text" => "H2CO3",
                        "is_correct" => false,
                        "explanation" => 'Wrong! H2CO3 is the chemical formula for carbonic acid, not sulphuric acid. The chemical formula for sulphuric acid is H2SO4.'
                    ]
                ],
                'source_exam' => ExamBody::WAEC,
                'source_year' => 2020,
                'difficulty_level' => DifficultyLevel::Intermediate,
            ],
            [
                "question" => "What is the name of the element that glows brightly in the dark?",
                "options" => [
                    [
                        "text" => "Phosphorus",
                        "is_correct" => true,
                        "explanation" => 'Correct! Phosphorus glow in the dark. You can find it in glow-in-the-dark toys, paint, and even on the tips of matchsticks.'
                    ],
                    [
                        "text" => "Sulphur",
                        "is_correct" => false,
                        "explanation" => 'Incorrect! Sulphur does not glow in the dark. The element that glows brightly in the dark is Phosphorus.'
                    ],
                    [
                        "text" => "Chlorine",
                        "is_correct" => false,
                        "explanation" => 'Nope! Chlorine does not glow in the dark. The element that glows brightly in the dark is Phosphorus.'
                    ],
                    [
                        "text" => "Sodium",
                        "is_correct" => false,
                        "explanation" => 'Wrong! Sodium does not glow in the dark. The element that glows brightly in the dark is Phosphorus.'
                    ]
                ],
                'source_exam' => ExamBody::WAEC,
                'source_year' => 2020,
                'difficulty_level' => DifficultyLevel::Advanced,
            ],
            [
                "question" => "What is the name of the process by which metals are extracted from their ores?",
                "options" => [
                    [
                        "text" => "Smelting",
                        "is_correct" => true,
                        "explanation" => 'Correct! Smelting is the process by which metals are extracted from their ores. It involves heating the ore to a high temperature to extract the metal.'
                    ],
                    [
                        "text" => "Electrolysis",
                        "is_correct" => false,
                        "explanation" => 'Incorrect! Electrolysis is a process that uses an electric current to drive a non-spontaneous chemical reaction. The process by which metals are extracted from their ores is smelting.'
                    ],
                    [
                        "text" => "Chromatography",
                        "is_correct" => false,
                        "explanation" => 'Nope! Chromatography is a laboratory technique used to separate mixtures. The process by which metals are extracted from their ores is smelting.'
                    ],
                    [
                        "text" => "Distillation",
                        "is_correct" => false,
                        "explanation" => 'Wrong! Distillation is a process used to separate mixtures based on differences in boiling points. The process by which metals are extracted from their ores is smelting.'
                    ]
                ],
                'source_exam' => ExamBody::WAEC,
                'source_year' => 2020,
                'difficulty_level' => DifficultyLevel::SuperAdvanced,
            ],
            [
                "question" => "What is the chemical formula for ethanol?",
                "options" => [
                    [
                        "text" => "C2H5OH",
                        "is_correct" => true,
                        "explanation" => 'Absolutely! The chemical formula for ethanol is C2H5OH. It is a type of alcohol that is commonly used in beverages and as a fuel.'
                    ],
                    [
                        "text" => "CH3OH",
                        "is_correct" => false,
                        "explanation" => 'Incorrect! CH3OH is the chemical formula for methanol, not ethanol. The chemical formula for ethanol is C2H5OH.'
                    ],
                    [
                        "text" => "C2H6O",
                        "is_correct" => false,
                        "explanation" => 'No way! C2H6O is not the chemical formula for ethanol. The correct chemical formula for ethanol is C2H5OH.'
                    ],
                    [
                        "text" => "CH4O",
                        "is_correct" => false,
                        "explanation" => 'Wrong! CH4O is not the chemical formula for ethanol. The correct chemical formula for ethanol is C2H5OH.'
                    ]
                ],
                'source_exam' => ExamBody::JAMB,
                'source_year' => 2020,
                'difficulty_level' => DifficultyLevel::Beginner,
            ],
            [
                "question" => "What is the name of the process by which food is broken down in the body?",
                "options" => [
                    [
                        "text" => "Digestion",
                        "is_correct" => true,
                        "explanation" => 'That\'s right! Digestion is the process by which food is broken down in the body to release nutrients and energy.'
                    ],
                    [
                        "text" => "Absorption",
                        "is_correct" => false,
                        "explanation" => 'Incorrect! Absorption is the process by which nutrients are taken up by the body. The process by which food is broken down in the body is digestion.'
                    ],
                    [
                        "text" => "Metabolism",
                        "is_correct" => false,
                        "explanation" => 'Nope! Metabolism is the set of life-sustaining chemical reactions in organisms. The process by which food is broken down in the body is digestion.'
                    ],
                    [
                        "text" => "Excretion",
                        "is_correct" => false,
                        "explanation" => 'Wrong! Excretion is the process by which waste products are eliminated from the body. The process by which food is broken down in the body is digestion.'
                    ]
                ],
                'source_exam' => ExamBody::JAMB,
                'source_year' => 2020,
                'difficulty_level' => DifficultyLevel::Amateur,
            ],
            [
                "question" => "What is the name of the element that is essential for photosynthesis?",
                "options" => [
                    [
                        "text" => "Magnesium",
                        "is_correct" => true,
                        "explanation" => 'Correct! Magnesium is essential for photosynthesis. It is a key component of chlorophyll, the pigment that gives plants their green color.'
                    ],
                    [
                        "text" => "Calcium",
                        "is_correct" => false,
                        "explanation" => 'Incorrect! Calcium is not essential for photosynthesis. The element that is essential for photosynthesis is Magnesium.'
                    ],
                    [
                        "text" => "Potassium",
                        "is_correct" => false,
                        "explanation" => 'Nope! Potassium is not essential for photosynthesis. The element that is essential for photosynthesis is Magnesium.'
                    ],
                    [
                        "text" => "Sodium",
                        "is_correct" => false,
                        "explanation" => 'Wrong! Sodium is not essential for photosynthesis. The element that is essential for photosynthesis is Magnesium.'
                    ]
                ],
                'source_exam' => ExamBody::JAMB,
                'source_year' => 2020,
                'difficulty_level' => DifficultyLevel::Intermediate,
            ],
            [
                "question" => "What is the chemical formula for ammonia?",
                "options" => [
                    [
                        "text" => "NH3",
                        "is_correct" => true,
                        "explanation" => 'Absolutely! The chemical formula for ammonia is NH3. It is a colorless gas with a characteristic pungent smell.'
                    ],
                    [
                        "text" => "NO2",
                        "is_correct" => false,
                        "explanation" => 'Incorrect! NO2 is the chemical formula for nitrogen dioxide, not ammonia. The chemical formula for ammonia is NH3.'
                    ],
                    [
                        "text" => "N2O",
                        "is_correct" => false,
                        "explanation" => 'No way! N2O is the chemical formula for nitrous oxide, not ammonia. The chemical formula for ammonia is NH3.'
                    ],
                    [
                        "text" => "NO",
                        "is_correct" => false,
                        "explanation" => 'Wrong! NO is the chemical formula for nitric oxide, not ammonia. The chemical formula for ammonia is NH3.'
                    ]
                ],
                'source_exam' => ExamBody::JAMB,
                'source_year' => 2020,
                'difficulty_level' => DifficultyLevel::Advanced,
            ],
            [
                "question" => "What is the element with the highest melting point?",
                "options" => [
                    [
                        "text" => "Tungsten",
                        "is_correct" => true,
                        "explanation" => 'Correct! Tungsten has the highest melting point of all the elements. It melts at a temperature of 3422°C (6192°F).'
                    ],
                    [
                        "text" => "Iron",
                        "is_correct" => false,
                        "explanation" => 'Incorrect! Iron has a melting point of 1538°C (2800°F), which is much lower than that of Tungsten (3422°C). Therefore, Tungsten is the correct answer.'
                    ],
                    [
                        "text" => "Gold",
                        "is_correct" => false,
                        "explanation" => 'Nope! Gold has a melting point of 1064°C (1947°F), which is much lower than that of Tungsten (3422°C). Therefore, Tungsten is the correct answer.'
                    ],
                    [
                        "text" => "Copper",
                        "is_correct" => false,
                        "explanation" => 'Wrong! Copper has a melting point of 1085°C (1985°F), which is much lower than that of Tungsten (3422°C). Therefore, Tungsten is the correct answer.'
                    ]
                ],
                'source_exam' => ExamBody::JAMB,
                'source_year' => 2020,
                'difficulty_level' => DifficultyLevel::SuperAdvanced,
            ],
            [
                "question" => "What is the chemical symbol for helium?",
                "options" => [
                    [
                        "text" => "He",
                        "is_correct" => true,
                        "explanation" => 'Absolutely! The chemical symbol for helium is He. It is a colorless, odorless, tasteless, non-toxic, inert, monatomic gas. You\'ll find it in balloons.'
                    ],
                    [
                        "text" => "H",
                        "is_correct" => false,
                        "explanation" => 'Incorrect! H is the chemical symbol for hydrogen, not helium. The chemical symbol for helium is He.'
                    ],
                    [
                        "text" => "Ne",
                        "is_correct" => false,
                        "explanation" => 'No way! Ne is the chemical symbol for neon, not helium. The chemical symbol for helium is He.'
                    ],
                    [
                        "text" => "Ar",
                        "is_correct" => false,
                        "explanation" => 'Wrong! Ar is the chemical symbol for argon, not helium. The chemical symbol for helium is He.'
                    ]
                ],
                'source_exam' => ExamBody::NECO,
                'source_year' => 2020,
                'difficulty_level' => DifficultyLevel::Beginner,
            ],
            [
                "question" => "What is the process by which water changes from a liquid to a gas?",
                "options" => [
                    [
                        "text" => "Evaporation",
                        "is_correct" => true,
                        "explanation" => 'That\'s right! Evaporation is the process by which water changes from a liquid to a gas. It is an important part of the water cycle.'
                    ],
                    [
                        "text" => "Condensation",
                        "is_correct" => false,
                        "explanation" => 'Incorrect! Condensation is quite the opposite of evaporation. It is the process by which water vapor changes from a gas to a liquid. The process by which water changes from a liquid to a gas is evaporation.'
                    ],
                    [
                        "text" => "Freezing",
                        "is_correct" => false,
                        "explanation" => 'No way! Freezing is the process by which water changes from a liquid to a solid. The process by which water changes from a liquid to a gas is evaporation.'
                    ],
                    [
                        "text" => "Melting",
                        "is_correct" => false,
                        "explanation" => 'Wrong! Melting is the process by which water changes from a solid to a liquid. The process by which water changes from a liquid to a gas is evaporation.'
                    ]
                ],
                'source_exam' => ExamBody::NECO,
                'source_year' => 2020,
                'difficulty_level' => DifficultyLevel::Amateur,
            ],
            [
                "question" => "What is the name of the process by which metals are extracted from their ores?",
                "options" => [
                    ["text" => "Smelting", "is_correct" => true],
                    ["text" => "Electrolysis", "is_correct" => false],
                    ["text" => "Distillation", "is_correct" => false],
                    ["text" => "Chromatography", "is_correct" => false]
                ],
                'source_exam' => ExamBody::NECO,
                'source_year' => 2020,
                'difficulty_level' => DifficultyLevel::Intermediate,
            ],
            [
                "question" => "What is the chemical formula for calcium sulfate?",
                "options" => [
                    ["text" => "CaSO4", "is_correct" => true],
                    ["text" => "CaCO3", "is_correct" => false],
                    ["text" => "NaCl", "is_correct" => false],
                    ["text" => "MgSO4", "is_correct" => false]
                ],
                'source_exam' => ExamBody::NECO,
                'source_year' => 2020,
                'difficulty_level' => DifficultyLevel::Advanced,
            ],
            [
                "question" => "What is the name of the scientist who discovered the periodic table?",
                "options" => [
                    ["text" => "Dmitri Mendeleev", "is_correct" => true],
                    ["text" => "Marie Curie", "is_correct" => false],
                    ["text" => "Albert Einstein", "is_correct" => false],
                    ["text" => "Isaac Newton", "is_correct" => false]
                ],
                'source_exam' => ExamBody::NECO,
                'source_year' => 2020,
                'difficulty_level' => DifficultyLevel::SuperAdvanced,
            ],
            [
                "question" => "What is the chemical formula for sulfuric acid?",
                "options" => [
                    ["text" => "H2SO4", "is_correct" => true],
                    ["text" => "HNO3", "is_correct" => false],
                    ["text" => "HCl", "is_correct" => false],
                    ["text" => "NaOH", "is_correct" => false]
                ],
                'source_exam' => ExamBody::WAEC,
                'source_year' => 2020,
                'difficulty_level' => DifficultyLevel::Beginner,
            ],
            [
                "question" => "What is the scientific name for table sugar?",
                "options" => [
                    ["text" => "Sucrose", "is_correct" => true],
                    ["text" => "Glucose", "is_correct" => false],
                    ["text" => "Fructose", "is_correct" => false],
                    ["text" => "Lactose", "is_correct" => false]
                ],
                'source_exam' => ExamBody::NECO,
                'source_year' => 2020,
                'difficulty_level' => DifficultyLevel::Advanced,
            ],
            [
                "question" => "What is the chemical symbol for silver?",
                "options" => [
                    ["text" => "Ag", "is_correct" => true],
                    ["text" => "Au", "is_correct" => false],
                    ["text" => "Cu", "is_correct" => false],
                    ["text" => "Fe", "is_correct" => false]
                ],
                'source_exam' => ExamBody::JAMB,
                'source_year' => 2020,
                'difficulty_level' => DifficultyLevel::Intermediate,
            ],
            [
                "question" => "What is the process by which plants convert food into energy?",
                "options" => [
                    ["text" => "Cellular respiration", "is_correct" => true],
                    ["text" => "Photosynthesis", "is_correct" => false],
                    ["text" => "Fermentation", "is_correct" => false],
                    ["text" => "Transpiration", "is_correct" => false]
                ],
                'source_exam' => ExamBody::NECO,
                'source_year' => 2020,
                'difficulty_level' => DifficultyLevel::Amateur,
            ],
            [
                "question" => "What is the chemical formula for methane?",
                "options" => [
                    ["text" => "CH4", "is_correct" => true],
                    ["text" => "CO2", "is_correct" => false],
                    ["text" => "H2O", "is_correct" => false],
                    ["text" => "N2", "is_correct" => false]
                ],
                'source_exam' => ExamBody::WAEC,
                'source_year' => 2020,
                'difficulty_level' => DifficultyLevel::SuperAdvanced,
            ],
            [
                "question" => "What is the chemical symbol for potassium?",
                "options" => [
                    ["text" => "K", "is_correct" => true],
                    ["text" => "Na", "is_correct" => false],
                    ["text" => "Ca", "is_correct" => false],
                    ["text" => "Mg", "is_correct" => false]
                ],
                'source_exam' => ExamBody::JAMB,
                'source_year' => 2020,
                'difficulty_level' => DifficultyLevel::Advanced,
            ],
            [
                "question" => "What is the process by which water changes from a gas to a liquid?",
                "options" => [
                    ["text" => "Condensation", "is_correct" => true],
                    ["text" => "Evaporation", "is_correct" => false],
                    ["text" => "Freezing", "is_correct" => false],
                    ["text" => "Melting", "is_correct" => false]
                ],
                'source_exam' => ExamBody::WAEC,
                'source_year' => 2020,
                'difficulty_level' => DifficultyLevel::Beginner,
            ],
            [
                "question" => "What is the chemical formula for ammonia?",
                "options" => [
                    ["text" => "NH3", "is_correct" => true],
                    ["text" => "NO2", "is_correct" => false],
                    ["text" => "SO2", "is_correct" => false],
                    ["text" => "CO2", "is_correct" => false]
                ],
                'source_exam' => ExamBody::JAMB,
                'source_year' => 2020,
                'difficulty_level' => DifficultyLevel::Advanced,
            ],
            [
                "question" => "What is the lightest element in the periodic table?",
                "options" => [
                    ["text" => "Hydrogen", "is_correct" => true],
                    ["text" => "Helium", "is_correct" => false],
                    ["text" => "Lithium", "is_correct" => false],
                    ["text" => "Oxygen", "is_correct" => false]
                ],
                'source_exam' => ExamBody::NECO,
                'source_year' => 2020,
                'difficulty_level' => DifficultyLevel::SuperAdvanced,
            ],
            [
                "question" => "What is the hardest natural substance on Earth?",
                "options" => [
                    ["text" => "Diamond", "is_correct" => true],
                    ["text" => "Gold", "is_correct" => false],
                    ["text" => "Topaz", "is_correct" => false],
                    ["text" => "Quartz", "is_correct" => false]
                ],
                'source_exam' => ExamBody::WAEC,
                'source_year' => 2020,
                'difficulty_level' => DifficultyLevel::Amateur,
            ],
            [
                "question" => "Which gas is used in light bulbs to prevent the filament from burning?",
                "options" => [
                    [
                        "text" => "Argon",
                        "is_correct" => true,
                        "explanation" => 'Correct! Argon is used in light bulbs to prevent the filament from burning. It is an inert gas that does not react with the hot filament.'
                    ],
                    [
                        "text" => "Helium",
                        "is_correct" => false,
                        "explanation" => 'Incorrect! Helium is not used in light bulbs to prevent the filament from burning. The gas used for this purpose is Argon.'
                    ],
                    [
                        "text" => "Neon",
                        "is_correct" => false,
                        "explanation" => 'Wrong. While Neon is used in neon signs, it is not used in light bulbs to prevent the filament from burning. The gas used for this purpose is Argon.'
                    ],
                    [
                        "text" => "Krypton",
                        "is_correct" => false,
                        "explanation" => 'No way! Krypton is not used in light bulbs to prevent the filament from burning. The gas used for this purpose is Argon.'
                    ]
                ],
                'source_exam' => ExamBody::NECO,
                'source_year' => 2020,
                'difficulty_level' => DifficultyLevel::Amateur,
            ],
            [
                "question" => "Which metal is liquid at room temperature?",
                "options" => [
                    [
                        "text" => "Mercury",
                        "is_correct" => true,
                        "explanation" => 'Correct! Mercury is the only metal that is liquid at room temperature. It has a melting point of -38.83°C (-37.89°F).'
                    ],
                    [
                        "text" => "Silver",
                        "is_correct" => false,
                        "explanation" => 'Incorrect! Silver is a solid metal at room temperature. The only metal that is liquid at room temperature is Mercury.'
                    ],
                    [
                        "text" => "Copper",
                        "is_correct" => false,
                        "explanation" => 'No way! Copper is a solid metal at room temperature. The only metal that is liquid at room temperature is Mercury.'
                    ],
                    [
                        "text" => "Gold",
                        "is_correct" => false,
                        "explanation" => 'Wrong! Gold is a solid metal at room temperature. The only metal that is liquid at room temperature is Mercury.'
                    ]
                ],
                'source_exam' => ExamBody::JAMB,
                'source_year' => 2020,
                'difficulty_level' => DifficultyLevel::Beginner,
            ]
        ];

        Schema::disableForeignKeyConstraints();
        Option::truncate();
        Question::truncate();
        Schema::enableForeignKeyConstraints();

        $chemistrySubject = Subject::where('slug', 'chemistry')->first();

        foreach ($chemistryQuestions as $chemistryQuestion) {
            $question = Question::create([
                'body' => $chemistryQuestion['question'],
                'subject_id' => $chemistrySubject->id,
                'source_exam' => $chemistryQuestion['source_exam'],
                'source_year' => $chemistryQuestion['source_year'],
                'difficulty_level' => $chemistryQuestion['difficulty_level']
            ]);

            foreach ($chemistryQuestion['options'] as $option) {
                $question->options()->create([
                    'body' => $option['text'],
                    'is_correct' => $option['is_correct'],
                    'explanation' => $option['explanation'] ?? null
                ]);
            }
        }
    }
}
