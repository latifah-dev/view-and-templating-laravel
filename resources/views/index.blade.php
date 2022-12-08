@extends('template')

@section('icon','images/home.ico')
@section('title','biodata')
@section('content')
@php
    $users = [
        [
            "nama"=>"Latifah",
            "foto"=>"images/google.png",
            "bio"=>"whatever",
            "active"=>true,
            "alamat"=>"Semarang",
            "role"=>"admin"
        ],
        [
            "nama"=>"Ridwan",
            "foto"=>"images/google.png",
            "bio"=>"aku orang paling ganteng",
            "active"=>true,
            "alamat"=>"Kebumen",
            "role"=>"user"
        ],
        [
            "nama"=>"Firman",
            "foto"=>"images/google.png",
            "bio"=>"firman itu chieemaan",
            "active"=>false,
            "alamat"=>"Tasikmalaya",
            "role"=>"admin"
        ],
        [
            "nama"=>"Hanif",
            "foto"=>"images/google.png",
            "bio"=>"jangan ragu mabar sama aku",
            "active"=>true,
            "alamat"=>"Bandung",
            "role"=>"user"
        ],
        [
            "nama"=>"Bayu",
            "foto"=>"images/google.png",
            "bio"=>"terserah sih",
            "active"=>false,
            "alamat"=>"Subang",
            "role"=>"admin"
        ],
        [
            "nama"=>"Valentino",
            "foto"=>"images/google.png",
            "bio"=>"si pak RT",
            "active"=>true,
            "alamat"=>"Bekasi",
            "role"=>"user"
        ],
        [
            "nama"=>"Apriando",
            "foto"=>"images/google.png",
            "bio"=>"oleh-oleh empek-empek",
            "active"=>false,
            "alamat"=>"Palembang",
            "role"=>"admin"
        ],
        [
            "nama"=>"Fachry Fernanda",
            "foto"=>"images/google.png",
            "bio"=>"pinter, jenius, encer",
            "active"=>true,
            "alamat"=>"Bekasi",
            "role"=>"user"
        ],
        [
            "nama"=>"Mahir",
            "foto"=>"images/google.png",
            "bio"=>"mahir segala hal",
            "active"=>true,
            "alamat"=>"Pekalongan",
            "role"=>"admin"
        ],
        [
            "nama"=>"Mas Arif",
            "foto"=>"images/google.png",
            "bio"=>"tidak tahu",
            "active"=>true,
            "alamat"=>"Bukit tinggi",
            "role"=>"user"
        ],
        [
            "nama"=>"Obi",
            "foto"=>"images/google.png",
            "bio"=>"mencari ilmu kemanapun",
            "active"=>true,
            "alamat"=>"Jayapura",
            "role"=>"admin"
        ],
        [
            "nama"=>"Agung",
            "foto"=>"images/google.png",
            "bio"=>"pulang pergi",
            "active"=>true,
            "alamat"=>"Bandung",
            "role"=>"user"
        ],
        [
            "nama"=>"Tegar",
            "foto"=>"images/google.png",
            "bio"=>"no stack to fullstack",
            "active"=>true,
            "alamat"=>"Medan",
            "role"=>"admin"
        ],
        [
            "nama"=>"is man",
            "foto"=>"images/google.png",
            "bio"=>"dia pria",
            "active"=>true,
            "alamat"=>"Jawa timur",
            "role"=>"user"
        ],
        [
            "nama"=>"Adnan",
            "foto"=>"images/google.png",
            "bio"=>"Pro frontend",
            "active"=>false,
            "alamat"=>"Tasikmalaya",
            "role"=>"admin"
        ],
        [
            "nama"=>"Khoirony",
            "foto"=>"images/google.png",
            "bio"=>"si paling tinggi",
            "active"=>true,
            "alamat"=>"lamongan",
            "role"=>"admin"
        ],
        [
            "nama"=>"Farid",
            "foto"=>"images/google.png",
            "bio"=>"aku terdekat",
            "active"=>true,
            "alamat"=>"Bandung",
            "role"=>"admin"
        ],
        [
            "nama"=>"Rijal",
            "foto"=>"images/google.png",
            "bio"=>"wibu",
            "active"=>true,
            "alamat"=>"Padalarang",
            "role"=>"user"
        ],
        [
            "nama"=>"Mas Abdul",
            "foto"=>"images/google.png",
            "bio"=>"ga tau",
            "active"=>true,
            "alamat"=>"Surabaya",
            "role"=>"user"
        ],
        [
            "nama"=>"Mas Doa",
            "foto"=>"images/google.png",
            "bio"=>"tidak tahu",
            "active"=>false,
            "alamat"=>"Tanggerang",
            "role"=>"admin"
        ],
        [
            "nama"=>"Rendi",
            "foto"=>"images/google.png",
            "bio"=>"memberi dislike",
            "active"=>true,
            "alamat"=>"Pemalang",
            "role"=>"user"
        ],
        [
            "nama"=>"Ihsan",
            "foto"=>"images/google.png",
            "bio"=>"jangan lupa minum susu",
            "active"=>true,
            "alamat"=>"Bandung",
            "role"=>"admin"
        ],
        [
            "nama"=>"Enji",
            "foto"=>"images/google.png",
            "bio"=>"Javanisasi",
            "active"=>true,
            "alamat"=>"Jepara",
            "role"=>"user"
        ],
        [
            "nama"=>"Diah",
            "foto"=>"images/google.png",
            "bio"=>"ketenangan",
            "active"=>false,
            "alamat"=>"Bekasi",
            "role"=>"admin"
        ],
        [
            "nama"=>"Dafa",
            "foto"=>"images/google.png",
            "bio"=>"istirahat yang cukup",
            "active"=>true,
            "alamat"=>"Tanggerang",
            "role"=>"admin"
        ]
        ];
    $filter = [
        "active"=>true,
        "role"=>"admin"
        ];
@endphp
<div class="flex flex-wrap gap-8">
@foreach($users as $user)
@if($user['active']===$filter['active'] && $user['role']===$filter['role'])
@include('components/cards.biodata')
@endif
@endforeach
</div>

@endsection