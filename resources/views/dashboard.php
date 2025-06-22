<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NutriFit Tracker</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* Custom CSS */
        .glass-card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border-radius: 20px;
            border: 1px solid rgba(255, 255, 255, 0.18);
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
        }
        .gradient-bg {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        .progress-ring__circle {
            transition: stroke-dashoffset 0.35s;
            transform: rotate(-90deg);
            transform-origin: 50% 50%;
        }
        .scrollbar-hide::-webkit-scrollbar {
            display: none;
        }
        .scrollbar-hide {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
    </style>
</head>
<body class="gradient-bg min-h-screen text-white">
    <div class="container mx-auto px-4 py-8 max-w-6xl">
        <!-- Header -->
        <header class="flex justify-between items-center mb-8">
            <div class="flex items-center">
                <i class="fas fa-heartbeat text-3xl mr-3"></i>
                <h1 class="text-3xl font-bold">SIGAR</h1>
            </div>
            <div class="flex items-center gap-4">
                <div class="relative">
                    <i class="fas fa-bell text-xl cursor-pointer"></i>
                    <span class="absolute -top-1 -right-1 h-2 w-2 rounded-full bg-red-500"></span>
                </div>
                <div class="h-10 w-10 rounded-full bg-white flex items-center justify-center overflow-hidden">
                    <img src="/images/sigar5.png" alt="Profile" class="h-full w-full object-cover">
                </div>
            </div>
        </header>

        <!-- Main Dashboard -->
        <main>
            <!-- Summary Cards -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                <!-- Calories Card -->
                <div class="glass-card p-6">
                    <div class="flex justify-between items-start">
                        <div>
                            <p class="text-gray-300">Calories Today</p>
                            <h2 class="text-3xl font-bold mt-2">1,842<small class="ml-1 text-sm">kcal</small></h2>
                            <p class="text-sm text-green-300 mt-1">+12% from yesterday</p>
                        </div>
                        <div class="relative w-16 h-16">
                            <svg class="w-full h-full" viewBox="0 0 36 36">
                                <path
                                    d="M18 2.0845
                                    a 15.9155 15.9155 0 0 1 0 31.831
                                    a 15.9155 15.9155 0 0 1 0 -31.831"
                                    fill="none"
                                    stroke="rgba(255,255,255,0.2)"
                                    stroke-width="2"
                                    stroke-dasharray="100, 100"
                                />
                                <path
                                    class="progress-ring__circle"
                                    d="M18 2.0845
                                    a 15.9155 15.9155 0 0 1 0 31.831
                                    a 15.9155 15.9155 0 0 1 0 -31.831"
                                    fill="none"
                                    stroke="#4ade80"
                                    stroke-width="2"
                                    stroke-dasharray="72, 100"
                                />
                            </svg>
                            <div class="absolute inset-0 flex items-center justify-center text-sm font-bold">72%</div>
                        </div>
                    </div>
                </div>

                <!-- Water Intake Card -->
                <div class="glass-card p-6">
                    <div class="flex justify-between items-start">
                        <div>
                            <p class="text-gray-300">Water Today</p>
                            <h2 class="text-3xl font-bold mt-2">5<small class="ml-1 text-sm">cups</small></h2>
                            <p class="text-sm text-blue-300 mt-1">2 more to reach goal</p>
                        </div>
                        <div class="flex gap-1">
                            <div class="w-4 h-16 rounded-full bg-blue-400 opacity-100"></div>
                            <div class="w-4 h-16 rounded-full bg-blue-400 opacity-100"></div>
                            <div class="w-4 h-16 rounded-full bg-blue-400 opacity-100"></div>
                            <div class="w-4 h-16 rounded-full bg-blue-400 opacity-100"></div>
                            <div class="w-4 h-16 rounded-full bg-blue-400 opacity-100"></div>
                            <div class="w-4 h-16 rounded-full bg-blue-400 opacity-50"></div>
                            <div class="w-4 h-16 rounded-full bg-blue-400 opacity-50"></div>
                        </div>
                    </div>
                </div>

                <!-- Activity Card -->
                <div class="glass-card p-6">
                    <div class="flex justify-between items-start">
                        <div>
                            <p class="text-gray-300">Steps Today</p>
                            <h2 class="text-3xl font-bold mt-2">8,427</h2>
                            <p class="text-sm text-purple-300 mt-1">57% of 10k goal</p>
                        </div>
                        <div class="relative w-16 h-16">
                            <svg class="w-full h-full" viewBox="0 0 36 36">
                                <path
                                    d="M18 2.0845
                                    a 15.9155 15.9155 0 0 1 0 31.831
                                    a 15.9155 15.9155 0 0 1 0 -31.831"
                                    fill="none"
                                    stroke="rgba(255,255,255,0.2)"
                                    stroke-width="2"
                                    stroke-dasharray="100, 100"
                                />
                                <path
                                    class="progress-ring__circle"
                                    d="M18 2.0845
                                    a 15.9155 15.9155 0 0 1 0 31.831
                                    a 15.9155 15.9155 0 0 1 0 -31.831"
                                    fill="none"
                                    stroke="#a78bfa"
                                    stroke-width="2"
                                    stroke-dasharray="57, 100"
                                />
                            </svg>
                            <div class="absolute inset-0 flex items-center justify-center text-sm font-bold">57%</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Nutrition and Workout Section -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                <!-- Nutrition Log -->
                <div class="glass-card p-6 lg:col-span-2">
                    <div class="flex justify-between items-center mb-6">
                        <h2 class="text-xl font-bold">Today's Nutrition</h2>
                        <button class="flex items-center gap-1 bg-white bg-opacity-20 hover:bg-opacity-30 px-4 py-2 rounded-full transition">
                            <i class="fas fa-plus text-sm"></i>
                            <span>Add Meal</span>
                        </button>
                    </div>

                    <div class="space-y-6">
                        <!-- Breakfast -->
                        <div class="bg-white bg-opacity-10 rounded-xl p-4">
                            <div class="flex justify-between">
                                <h3 class="font-medium">Breakfast</h3>
                                <p class="text-sm text-gray-300">450 kcal</p>
                            </div>
                            <div class="mt-2">
                                <div class="flex items-center justify-between py-2 border-b border-white border-opacity-10">
                                    <div class="flex items-center gap-3">
                                        <div class="w-8 h-8 rounded bg-yellow-500 flex items-center justify-center">
                                            <i class="fas fa-bread-slice text-xs"></i>
                                        </div>
                                        <span>Whole wheat toast</span>
                                    </div>
                                    <span class="text-sm">150 kcal</span>
                                </div>
                                <div class="flex items-center justify-between py-2 border-b border-white border-opacity-10">
                                    <div class="flex items-center gap-3">
                                        <div class="w-8 h-8 rounded bg-blue-500 flex items-center justify-center">
                                            <i class="fas fa-egg text-xs"></i>
                                        </div>
                                        <span>Scrambled eggs</span>
                                    </div>
                                    <span class="text-sm">200 kcal</span>
                                </div>
                                <div class="flex items-center justify-between py-2">
                                    <div class="flex items-center gap-3">
                                        <div class="w-8 h-8 rounded bg-green-500 flex items-center justify-center">
                                            <i class="fas fa-apple-alt text-xs"></i>
                                        </div>
                                        <span>Fresh orange juice</span>
                                    </div>
                                    <span class="text-sm">100 kcal</span>
                                </div>
                            </div>
                        </div>

                        <!-- Lunch -->
                        <div class="bg-white bg-opacity-10 rounded-xl p-4">
                            <div class="flex justify-between">
                                <h3 class="font-medium">Lunch</h3>
                                <p class="text-sm text-gray-300">620 kcal</p>
                            </div>
                            <div class="mt-2">
                                <div class="flex items-center justify-between py-2 border-b border-white border-opacity-10">
                                    <div class="flex items-center gap-3">
                                        <div class="w-8 h-8 rounded bg-red-500 flex items-center justify-center">
                                            <i class="fas fa-drumstick-bite text-xs"></i>
                                        </div>
                                        <span>Grilled chicken</span>
                                    </div>
                                    <span class="text-sm">330 kcal</span>
                                </div>
                                <div class="flex items-center justify-between py-2 border-b border-white border-opacity-10">
                                    <div class="flex items-center gap-3">
                                        <div class="w-8 h-8 rounded bg-yellow-500 flex items-center justify-center">
                                            <i class="fas fa-rice text-xs"></i>
                                        </div>
                                        <span>Brown rice</span>
                                    </div>
                                    <span class="text-sm">200 kcal</span>
                                </div>
                                <div class="flex items-center justify-between py-2">
                                    <div class="flex items-center gap-3">
                                        <div class="w-8 h-8 rounded bg-green-500 flex items-center justify-center">
                                            <i class="fas fa-leaf text-xs"></i>
                                        </div>
                                        <span>Vegetable salad</span>
                                    </div>
                                    <span class="text-sm">90 kcal</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Workout Log -->
                <div class="glass-card p-6">
                    <div class="flex justify-between items-center mb-6">
                        <h2 class="text-xl font-bold">Today's Workout</h2>
                        <button class="flex items-center gap-1 bg-white bg-opacity-20 hover:bg-opacity-30 px-4 py-2 rounded-full transition">
                            <i class="fas fa-plus text-sm"></i>
                            <span>Add Activity</span>
                        </button>
                    </div>

                    <div class="space-y-4">
                        <div class="flex items-center gap-4 p-3 bg-white bg-opacity-10 rounded-lg">
                            <div class="w-12 h-12 rounded-full bg-purple-500 flex items-center justify-center">
                                <i class="fas fa-running"></i>
                            </div>
                            <div class="flex-1">
                                <h4 class="font-medium">Morning Run</h4>
                                <p class="text-xs text-gray-300">30 min • 4.5 km</p>
                            </div>
                            <div class="text-sm font-medium">350 kcal</div>
                        </div>

                        <div class="flex items-center gap-4 p-3 bg-white bg-opacity-10 rounded-lg">
                            <div class="w-12 h-12 rounded-full bg-pink-500 flex items-center justify-center">
                                <i class="fas fa-dumbbell"></i>
                            </div>
                            <div class="flex-1">
                                <h4 class="font-medium">Strength Training</h4>
                                <p class="text-xs text-gray-300">45 min • Upper body</p>
                            </div>
                            <div class="text-sm font-medium">270 kcal</div>
                        </div>

                        <div class="flex items-center gap-4 p-3 bg-white bg-opacity-10 rounded-lg">
                            <div class="w-12 h-12 rounded-full bg-blue-500 flex items-center justify-center">
                                <i class="fas fa-walking"></i>
                            </div>
                            <div class="flex-1">
                                <h4 class="font-medium">Evening Walk</h4>
                                <p class="text-xs text-gray-300">25 min • 1.8 km</p>
                            </div>
                            <div class="text-sm font-medium">140 kcal</div>
                        </div>
                    </div>

                    <div class="mt-8">
                        <h3 class="font-bold mb-4">Macronutrients</h3>
                        <div class="space-y-3">
                            <div>
                                <div class="flex justify-between text-sm mb-1">
                                    <span>Carbs</span>
                                    <span>210g (42%)</span>
                                </div>
                                <div class="w-full bg-white bg-opacity-20 rounded-full h-2">
                                    <div class="bg-blue-400 h-2 rounded-full" style="width: 42%"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between text-sm mb-1">
                                    <span>Protein</span>
                                    <span>120g (32%)</span>
                                </div>
                                <div class="w-full bg-white bg-opacity-20 rounded-full h-2">
                                    <div class="bg-green-400 h-2 rounded-full" style="width: 32%"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between text-sm mb-1">
                                    <span>Fat</span>
                                    <span>60g (26%)</span>
                                </div>
                                <div class="w-full bg-white bg-opacity-20 rounded-full h-2">
                                    <div class="bg-yellow-400 h-2 rounded-full" style="width: 26%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <!-- Bottom Navigation -->
        <nav class="fixed bottom-0 left-0 right-0 bg-white bg-opacity-20 backdrop-filter backdrop-blur-lg flex justify-around items-stretch py-3 px-4 max-w-md mx-auto rounded-t-3xl">
            <button class="flex flex-col items-center justify-center px-4 py-2 rounded-full">
                <i class="fas fa-home text-xl mb-1 opacity-100"></i>
                <span class="text-xs">Home</span>
            </button>
            <button class="flex flex-col items-center justify-center px-4 py-2 rounded-full">
                <i class="fas fa-utensils text-xl mb-1 opacity-50"></i>
                <span class="text-xs opacity-50">Nutrition</span>
            </button>
            <button class="flex flex-col items-center justify-center px-4 py-2 rounded-full">
                <i class="fas fa-dumbbell text-xl mb-1 opacity-50"></i>
                <span class="text-xs opacity-50">Workout</span>
            </button>
            <button class="flex flex-col items-center justify-center px-4 py-2 rounded-full">
                <i class="fas fa-chart-line text-xl mb-1 opacity-50"></i>
                <span class="text-xs opacity-50">Stats</span>
            </button>
        </nav>
    </div>

    <script>
        // Add interactive functionality
        document.addEventListener('DOMContentLoaded', function() {
            // Example: Add meal button functionality would go here
            console.log('NutriFit Tracker is ready!');
            
            // For a real app, you would add:
            // - API calls to fetch/save data
            // - Form handling for adding meals/workouts
            // - Local storage for offline functionality
            // - More interactive charts and graphs
            // - User authentication flows
        });
    </script>
</body>
</html>
