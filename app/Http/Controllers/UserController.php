<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function showAdminDashboard()
    {
        // Kein Suchbegriff - keine Benutzer an die View
        return view('admin');
    }

    public function searchUsers(Request $request)
    {
        $query = $request->input('query');

        // Wenn der Query-String leer ist - View
        if (empty(trim($query))) {
            return view('admin');
        }

        // Wenn der Query-String nicht leer ist - Abfrage
        $users = User::where('last_name', 'LIKE', "{$query}%")->get();

        return view('admin', compact('users'));
    }

    public function updateAdminStatus(Request $request, User $user)
    {
        try {
            $request->validate(['is_admin' => 'required|boolean']);
            $user->update(['is_admin' => $request->is_admin]);
            return back()->with('status', 'Benutzerstatus erfolgreich aktualisiert!');
        } catch (\Exception $e) {
            return back()->with('error', 'Es gab einen Fehler beim Aktualisieren des Benutzerstatus!');
        }
    }
}

