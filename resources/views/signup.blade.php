<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sign Up to ULAR HITAM</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <style>
        .bg-custom-secondary {
            background-color: #2d3748;
        }
        .checkbox-primary input:checked ~ .checkmark {
            background-color: #2d3748;
            border-color: #2d3748;
        }
        .checkbox-wrap {
            position: relative;
            padding-left: 30px;
            cursor: pointer;
        }
        .checkmark {
            position: absolute;
            left: 0;
            top: 2px;
            height: 20px;
            width: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .checkbox-wrap input {
            position: absolute;
            opacity: 0;
        }
        .checkbox-wrap input:checked ~ .checkmark:after {
            content: '';
            position: absolute;
            left: 7px;
            top: 3px;
            width: 5px;
            height: 10px;
            border: solid white;
            border-width: 0 2px 2px 0;
            transform: rotate(45deg);
        }
    </style>
</head>
<body class="bg-gray-100">
    <section class="py-12 px-4">
        <div class="container mx-auto max-w-6xl">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800">Looks like you don't have an account</h2>
            </div>
            
            <div class="flex justify-center">
                <div class="w-full max-w-4xl">
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                        <form method="post" action="{{ url('/signup') }}" class="md:flex">
                            @csrf
                            <div class="w-full md:w-1/2 p-8">
                                <div class="mb-8">
                                    <h3 class="text-2xl font-bold text-gray-800">Sign Up</h3>
                                </div>
                                
                                <div class="space-y-6">
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-1" for="email">E-mail</label>
                                        <input type="email" 
                                               class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-gray-700 focus:border-transparent" 
                                               placeholder="E-mail" 
                                               name="email" 
                                               required>
                                    </div>
                                    
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-1" for="username">Username</label>
                                        <input type="text" 
                                               class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-gray-700 focus:border-transparent" 
                                               placeholder="Username" 
                                               name="username" 
                                               required>
                                    </div>
                                    
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-1" for="password">Password</label>
                                        <input type="password" 
                                               class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-gray-700 focus:border-transparent" 
                                               placeholder="Password" 
                                               name="password" 
                                               required>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="w-full md:w-1/2 bg-custom-secondary p-8 text-white">
                                <div class="space-y-6">
                                    <button type="submit" 
                                            class="w-full px-4 py-2 bg-white text-gray-800 rounded-md hover:bg-gray-100 transition-colors duration-200 font-medium">
                                        Sign me Up
                                    </button>
                                    
                                    <div class="flex flex-col md:flex-row justify-between space-y-4 md:space-y-0">
                                        <div>
                                            <label class="checkbox-wrap checkbox-primary text-sm">
                                                Remember Me
                                                <input type="checkbox" checked>
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        
                                        <div>
                                            <a href="{{ url('/login') }}" 
                                               class="text-sm text-white hover:text-gray-300 transition-colors duration-200">
                                                Already Have One? Login Here!
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>