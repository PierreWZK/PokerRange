<!-- use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // Table des range
        Schema::create('ranges', function (Blueprint $table) {
            $table->id();
            $table->string('id_user')->autoIncrement();
            $table->string('name');
            $table->integer('position');
            $table->string('description');
            $table->dateTime('updated_at')->useCurrent();
            $table->dateTime('created_at')->useCurrent();
        });

        // Table des positions
        Schema::create('positions', function (Blueprint $table) {
            $table->id();
            $table->string('id_range');
            $table->string('code', 4);            // Ex: 'BTN', 'SB'
            $table->integer('position');          // Ex: 0, 1, 2, 3, ...
            $table->string('name');               // Ex: 'Button', 'Small Blind'
            $table->timestamps();
        });

        // Table des stacks
        Schema::create('stacks', function (Blueprint $table) {
            $table->id();
            $table->string('id_range');
            $table->string('code', 8);            // Ex: '15-19', '20-26', '100+', '100-200'
            $table->string('name');               // Ex: '15 à 19 BB', '20 à 26 BB', '100 BB et plus', '100 à 200 BB'
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('positions');
        Schema::dropIfExists('stacks');
    }
}; -->
