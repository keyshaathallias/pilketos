@extends('layouts.loginLayout')

@section('content')
  <div class="flex flex-col items-center text-white">
    <div class="flex items-center justify-center mt-[100px]">
      <img src="/assets/Logo-OSIS.png" alt="Logo OSIS">
      <img src="/assets/Logo-SMKN-4.png" alt="Logo SMKN 4">

    </div>
    <h1 class="text-3xl font-bold  text-[18px] text-center leading-6 mt-[20px] tracking-widest mb-3">
      PEMILIHAN<br>
      KETUA & WAKIL
      <br>KETUA OSIS
    </h1>
    <p>SMK NEGERI 4 TANGERANG</p>

    <form method="post"
      class="flex flex-col w-full bg-secondary rounded-[40px] p-[22px] gap-4 md:gap-7 mt-[50px] md:w-3/4 lg:w-2/5 md:p-[30px]">
      <div class="relative h-[40px]">
        <input type="text" name="" id="" class="rounded-[20px] py-2 pe-5 ps-12 absolute w-full"
          placeholder="NISN">
        <img src="/assets/icon-username.png" alt="" class="absolute -translate-y-1/2 top-1/2 left-3">
      </div>
      <div class="relative h-[40px]">
        <input type="password" name="" id="" class="rounded-[20px] py-2 pe-5 ps-12 w-full"
          placeholder="KATA SANDI">
        <img src="/assets/icon-password.png" alt="" class="absolute -translate-y-1/2 top-1/2 left-3">
      </div>

      <div class="flex flex-col gap-3 text-center">
        <a href="{{ route('kandidat') }}" class="w-full rounded-[20px] py-2 px-5 bg-success font-semibold">MASUK</a>
        {{-- <button type="submit" class="w-full rounded-[20px] py-2 px-5 bg-success font-semibold">MASUK</button> --}}
        <a href="#" class="text-[#AAAAAA] text-[12px] md:text-16px">lihat perolehan suara</a>
      </div>
    </form>
  </div>
@endsection
