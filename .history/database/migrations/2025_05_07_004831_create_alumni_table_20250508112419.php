
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlumnisTable extends Migration
{
    public function up()
    {
        Schema::create('alumnis', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('jenis_kelamin');
            $table->string('kampus');
            $table->year('angkatan');
            $table->string('pekerjaan')->nullable();
            $table->string('bidang_keahlian')->nullable();
            $table->text('pengalaman')->nullable();
            $table->string('asal')->nullable();
            $table->string('contact')->nullable();
            $table->text('riwayat_pendidikan')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('alumnis');
    }
}
