<?php

use Illuminate\Database\Seeder;
use App\dosen;
use App\mahasiswa;
use App\wali;
use App\hobi;
class RelasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //menghapus
        DB::table('dosens')->delete();
    	DB::table('mahasiswas')->delete();
    	DB::table('walis')->delete();
    	DB::table('hobis')->delete();
    	DB::table('mahasiswa_hobis')->delete();

        $dosen = Dosen::create([
        	'nama' => 'Abdul Mustafa',
        	'nipd' => '1234567890'
        ]);
        $this->command->info('Data Dosen Berhasil dibuat');

        $mamat = mahasiswa::create([
        	'nama' => 'Mamat Karbit',
        	'nim' => '101010101',
        	'id_dosen' => $dosen->id
        ]);

        $feri = mahasiswa::create([
        	'nama' => 'Feri Ambyar Supriadi',
        	'nim' => '1010130',
        	'id_dosen' => $dosen->id
        ]);

        $dadang = mahasiswa::create([
        	'nama' => 'Dadang',
        	'nim' => '10101324',
        	'id_dosen' => $dosen->id
        ]);
        $this->command->info('Data Mahasiswa Berhasil Dibuat');

        //wali
        $ahmad = wali::create([
        	'nama' => 'Ahmad',
        	'id_mahasiswa' => $dadang->id
        ]);

        $dudung = wali::create([
        	'nama' => 'Dudung',
        	'id_mahasiswa' => $mamat->id
        ]);

        $basit = wali::create([
        	'nama' => 'Basit',
        	'id_mahasiswa' => $feri->id
        ]);
        $this->command->info('Data Wali Berhasil Dibuat');

        //wali
        $mancing = hobi::create([
        	'hobi' => 'Mancing Keributan'
        ]);

        $gaming = hobi::create([
        	'hobi' => 'Dota 2'
        ]);

        $mengaji = hobi::create([
        	'hobi' => 'Mengaji One Day One Ayat'
        ]);

        //melampirkan hobi ke mahasiswa
        $mamat->hobi()->attach($mancing->id);
        $dadang->hobi()->attach($mengaji->id);
        $feri->hobi()->attach($gaming->id);

    }
}
