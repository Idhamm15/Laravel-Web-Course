<!-- Validation inputs -->
<h4
    class="mb-4 text-lg text-center font-semibold text-gray-600 dark:text-gray-300"
>
    Tambah Data Course
</h4>


<form method="POST" action="{{ url('/daftar-course/store')}}">
  @csrf
  <div class="mb-6">
    <label for="name" class="block mb-2 text-sm font-medium text-gray-200 dark:text-white">Your name</label>
    <input type="text" name="name" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="Your name" required>
  </div>
  <div class="mb-6">
    <label for="harga" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Harga</label>
    <input type="text" name="harga" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required>
  </div>
  <div class="mb-6">
    <label for="status" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status</label>
    <input type="text" name="status" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required>
  </div>
  <div class="mb-6">
    <label for="deskripsi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi</label>
    <input type="text rows="4" name="deskripsi" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Deskripsi Course ..."></textarea>
  </div>

  <div class="px-2 my-2">
    <button
        type="submit"
        class="px-4 py-2 text-sm font-medium leading-5 text-white text-align-center transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
    >
        Tambah
    </button>
    </div>
</form>
