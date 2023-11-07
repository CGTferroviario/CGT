<?php 

    $month = date('m');
    $day = date('d');
    $year = date('Y');

    $fecha = $year . '-' . $month . '-' . $day;
    
?>
<div class="">
    <label for="fecha" class="block mb-2 text-sm font-medium text-white">Fecha</label>
    <input type="date" class="bg-gray-700 border border-gray-600 text-white text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 placeholder-gray-400" name="fecha" value="<?php echo $fecha; ?>">
</div>