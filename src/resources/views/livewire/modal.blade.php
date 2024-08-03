<div>
    <button wire:click="$emit('openModal')" type="button" class="px-4 py-2 font-bold text-white bg-blue-500 rounded hover:bg-blue-700">
        詳細
    </button>

    @if($showModal)
    <div class="modal">
        <div class="fixed z-10 inset-0 overflow-y-auto">
            <!-- 背景オーバーレイ -->
            <div class="fixed inset-0 bg-gray-500 bg-opacity-75" wire:click="closeModal"></div>

            <!-- モーダル本体 -->
            <div class="flex items-center justify-center min-h-screen p-4 text-center">
                <div class="relative bg-white rounded-lg overflow-hidden shadow-xl transform transition-all sm:max-w-lg sm:w-full mx-4">
                    <!-- モーダルの左上に閉じるボタン -->
                    <div class="absolute top-0 right-0 pt-2 pl-2">
                        <button wire:click="closeModal" class="text-gray-400 hover:text-gray-500 focus:outline-none">
                            <span class="sr-only">×</span>
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                    <table class="modal__table">
                        <tr>
                            <th>お名前</th>
                            <td>山田太郎</td>
                        </tr>
                        <tr>
                            <th>性別</th>
                            <td>男性</td>
                        </tr>
                        <tr>
                            <th>メールアドレス</th>
                            <td>aaa@gmail.com</td>
                        </tr>
                        <tr>
                            <th>電話番号</th>
                            <td>09012345678</td>
                        </tr>
                        <tr>
                            <th>住所</th>
                            <td>town,city</td>
                        </tr>
                        <tr>
                            <th>建物名</th>
                            <td>building</td>
                        </tr>
                        <tr>
                            <th>お問い合わせの種類</th>
                            <td>category_id</td>
                        </tr>
                        <tr>
                            <th>お問い合わせの内容</th>
                            <td>detail</td>
                        </tr>
                    </table>

                </div>
                <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                    <button wire:click="closeModal" type="button" class="inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700">
                        閉じる
                    </button>
                </div>
            </div>
        </div>
    </div>
    @endif
</div>