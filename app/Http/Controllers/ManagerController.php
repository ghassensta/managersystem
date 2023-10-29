<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Manager;


class ManagerController extends Controller
{

    public function index()
    {
        $manager = Manager::all();
        $count = $manager->count();
        return view('manager.index', compact('manager', 'count'));
    }


    public function create(Request $request)
    {
        // Récupérez les données du formulaire
        $data = $request->all();

        // Insérez les données dans la base de données
        $manager = new Manager();
        $manager->title = $data['title'];
        $manager->price = $data['price'];
        $manager->taxes = $data['taxes'];
        $manager->ads = $data['ads'];
        $manager->discount = $data['discount'];
        $manager->count = $data['count'];
        $manager->category = $data['category'];

        // Calculez le champ "total" en fonction des autres champs
        $manager->total = $manager->price + $manager->taxes + $manager->ads - $manager->discount;

        $manager->save();

        // Répondre avec une confirmation ou des données, si nécessaire
        return redirect()->route('home');
    }


public function delete ($id){

    $manager=Manager::find($id);
    $manager->delete();

    return redirect()->route('home');

}

public function deleteAll()
{
    Manager::truncate();
    return redirect()->route('home');
}


}
