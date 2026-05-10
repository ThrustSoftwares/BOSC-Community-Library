@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-blue-50 to-indigo-100">
    <!-- Navigation Bar -->
    <nav class="bg-white shadow-md">
        <div class="max-w-6xl mx-auto px-4 py-4 flex justify-between items-center">
            <div class="flex items-center space-x-2">
                <span class="text-2xl font-bold text-blue-600">📚 BOSC Library</span>
            </div>
            <div class="flex items-center space-x-6">
                <span class="text-gray-700 font-medium">Welcome, <strong>{{ Auth::user()->name }}</strong>!</span>
                <form action="{{ route('logout') }}" method="POST" class="inline">
                    @csrf
                    <button
                        type="submit"
                        class="px-4 py-2 bg-red-500 hover:bg-red-600 text-white rounded-lg font-semibold transition"
                    >
                        Logout
                    </button>
                </form>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="max-w-6xl mx-auto px-4 py-12">
        @if (session('success'))
            <div class="mb-6 p-4 bg-green-50 border border-green-200 rounded-lg">
                <p class="text-green-800 font-semibold">{{ session('success') }}</p>
            </div>
        @endif

        <!-- Dashboard Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-12">
            <!-- Stats Cards -->
            <div class="bg-white rounded-lg shadow-lg p-6 hover:shadow-xl transition">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-600 text-sm font-semibold">Total Resources</p>
                        <p class="text-3xl font-bold text-blue-600 mt-2">1,247</p>
                    </div>
                    <div class="text-4xl">📖</div>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-lg p-6 hover:shadow-xl transition">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-600 text-sm font-semibold">Categories</p>
                        <p class="text-3xl font-bold text-indigo-600 mt-2">18</p>
                    </div>
                    <div class="text-4xl">🏷️</div>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-lg p-6 hover:shadow-xl transition">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-600 text-sm font-semibold">Downloads</p>
                        <p class="text-3xl font-bold text-green-600 mt-2">342</p>
                    </div>
                    <div class="text-4xl">⬇️</div>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-lg p-6 hover:shadow-xl transition">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-600 text-sm font-semibold">Users Active</p>
                        <p class="text-3xl font-bold text-purple-600 mt-2">456</p>
                    </div>
                    <div class="text-4xl">👥</div>
                </div>
            </div>
        </div>

        <!-- Quick Actions -->
        <div class="bg-white rounded-lg shadow-lg p-8 mb-12">
            <h2 class="text-2xl font-bold text-gray-900 mb-6">Quick Actions</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <a href="{{ route('resources.browse') }}" class="p-6 border-2 border-blue-300 rounded-lg hover:bg-blue-50 transition text-center">
                    <div class="text-4xl mb-2">🔍</div>
                    <h3 class="font-semibold text-gray-900">Browse Resources</h3>
                    <p class="text-sm text-gray-600 mt-1">Explore our library</p>
                </a>

                <a href="{{ route('resources.add') }}" class="p-6 border-2 border-indigo-300 rounded-lg hover:bg-indigo-50 transition text-center">
                    <div class="text-4xl mb-2">➕</div>
                    <h3 class="font-semibold text-gray-900">Add Resource</h3>
                    <p class="text-sm text-gray-600 mt-1">Contribute content</p>
                </a>

                <a href="{{ route('favorites') }}" class="p-6 border-2 border-green-300 rounded-lg hover:bg-green-50 transition text-center">
                    <div class="text-4xl mb-2">⭐</div>
                    <h3 class="font-semibold text-gray-900">My Favorites</h3>
                    <p class="text-sm text-gray-600 mt-1">Bookmarked items</p>
                </a>
            </div>
        </div>

        <!-- User Profile Info -->
        <div class="bg-white rounded-lg shadow-lg p-8">
            <h2 class="text-2xl font-bold text-gray-900 mb-6">Your Profile</h2>
            <div class="space-y-4">
                <div class="border-b pb-4">
                    <p class="text-sm text-gray-600">Full Name</p>
                    <p class="text-lg font-semibold text-gray-900">{{ Auth::user()->name }}</p>
                </div>
                <div class="border-b pb-4">
                    <p class="text-sm text-gray-600">Email Address</p>
                    <p class="text-lg font-semibold text-gray-900">{{ Auth::user()->email }}</p>
                </div>
                <div class="border-b pb-4">
                    <p class="text-sm text-gray-600">Member Since</p>
                    <p class="text-lg font-semibold text-gray-900">{{ Auth::user()->created_at->format('M d, Y') }}</p>
                </div>
                <div>
                    <a href="{{ route('profile.edit') }}" class="inline-block px-6 py-2 bg-blue-500 hover:bg-blue-600 text-white rounded-lg font-semibold transition text-center">
                        Edit Profile
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
