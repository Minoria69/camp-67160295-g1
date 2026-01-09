public function up(): void
{
    Schema::create('pokedexes', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('type');
        $table->string('species');
        $table->float('height');
        $table->float('weight');
        $table->integer('hp');
        $table->integer('attack');
        $table->integer('defense');
        $table->text('image_url')->nullable(); // ใช้ text เผื่อ URL ยาว
        $table->timestamps();
    });
}
