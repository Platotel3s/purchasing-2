<x-app-layout>
    <div class="py-12">
        {{--  --}}
            <div class="container mx-auto">
                <div class="flex justify-center">
                    <div class="w-full max-w-2xl">
                        <div class="bg-white shadow-lg rounded-lg">
                            <div class="bg-blue-600 text-white text-center text-lg font-bold py-3 rounded-t-lg">
                                {{ __("Posting") }}
                            </div>
                            <div class="p-6">
                                <form action="" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-4">
                                        <label for="title" class="block text-gray-700 font-medium mb-2">Judul:</label>
                                        <textarea 
                                            class="w-full border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-blue-500 focus:outline-none" 
                                            name="title" 
                                            id="title" 
                                            rows="2" 
                                            required 
                                            placeholder="Judul dilarang SARA"></textarea>
                                    </div>
                                    <div class="mb-4">
                                        <label for="content" class="block text-gray-700 font-medium mb-2">Konten:</label>
                                        <textarea 
                                            class="w-full border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-blue-500 focus:outline-none" 
                                            name="content" 
                                            id="content" 
                                            rows="8" 
                                            required></textarea>
                                    </div>
                                    <button 
                                        type="submit" 
                                        class="w-full bg-green-500 hover:bg-green-600 text-white font-medium py-2 px-4 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-400">
                                        Submit
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>            
        </div>
    </div>
    <script src="https://cdn.tiny.cloud/1/xfl6jg9pin1xclilhfgawh8pc0tvc0lyj8b1gfcjg7w419wl/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    
    <script>
        tinymce.init({
            selector:'#content'
        })    
    </script>
</x-app-layout>