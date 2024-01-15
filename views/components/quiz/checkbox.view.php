<?php
$data = $_POST;
$value = $data["answer"];
$index = $data["index"];
echo <<<EOL
<div class="relative flex gap-x-3">
    <div class="answers-cards flex h-6 items-center">
        <input name="choice[$index][isCorrect]" type="checkbox" value="1" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
    </div>
    <div class="text-sm leading-6">
        <label for="isCorrect" class="font-medium text-gray-900">Correct Answer</label>        
    </div>
    <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
        <textarea name="choice[$index][answer]" id="newanswer" rows="3" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="$value">$value</textarea>
     </div>
    
</div>
EOL;
return;