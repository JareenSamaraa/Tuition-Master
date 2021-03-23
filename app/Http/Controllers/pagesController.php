<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class pagesController extends Controller
{
    public function getIndex(){
        return view('index');
        }

        public function getHelp(){
            return view('Help');
            }

            public function getAbout(){
                return view('about');
                }
                public function getJoinTutor(){
                    return view('joinTutor');
                    }

                    public function getJoinParent(){
                        return view('joinParent');
                        }




        
}
