<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Importando o Tailwind CSS via CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-slate-50 min-h-screen flex items-center justify-center p-4 antialiased">

    <div class="bg-white p-8 rounded-2xl shadow-sm border border-slate-100 w-full max-w-md">
        <h2 class="text-2xl font-bold text-slate-800 mb-6 text-center">Cadastro de Candidato</h2>

        <form action="receber1.php" method="post" enctype="multipart/form-data" class="space-y-5">

            <!-- NOME -->
            <div>
                <label class="block text-sm font-semibold text-slate-700 mb-1">NOME:</label>
                <input type="text" name="nome" required class="w-full px-3 py-2 border border-slate-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition">
            </div>

            <!-- SOBRENOME -->
            <div>
                <label class="block text-sm font-semibold text-slate-700 mb-1">SOBRENOME:</label>
                <input type="text" name="sobrenome" required class="w-full px-3 py-2 border border-slate-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition">
            </div>

            <!-- DATA DE NASCIMENTO -->
            <div>
                <label class="block text-sm font-semibold text-slate-700 mb-1">DATA DE NASCIMENTO:</label>
                <input type="date" name="nascimento" required class="w-full px-3 py-2 border border-slate-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition text-slate-600">
            </div>

            <!-- ALTURA -->
            <div>
                <label class="block text-sm font-semibold text-slate-700 mb-1">ALTURA:</label>
                <div class="relative flex items-center">
                    <input type="number" name="altura" required class="w-full px-3 py-2 border border-slate-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition pr-12">
                    <span class="absolute right-3 text-sm font-medium text-slate-400">cm</span>
                </div>
            </div>

            <!-- SEXO -->
            <div>
                <label class="block text-sm font-semibold text-slate-700 mb-1">SEXO:</label>
                <select name="sexo" class="w-full px-3 py-2 border border-slate-300 rounded-lg bg-white focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition text-slate-700">
                    <option value="definir">Selecionar</option>
                    <option value="Masculino">Masculino</option>
                    <option value="Feminino">Feminino</option>
                </select>
            </div>

            <!-- HORÁRIO DISPONÍVEL -->
            <div>
                <span class="block text-sm font-semibold text-slate-700 mb-2">HORÁRIO DISPONÍVEL:</span>
                <div class="grid grid-cols-2 gap-2 bg-slate-50 p-3 rounded-lg border border-slate-100">
                    <label class="flex items-center space-x-2 text-sm text-slate-600 cursor-pointer select-none">
                        <input type="radio" name="horario" value="Noturno" class="w-4 h-4 text-blue-600 focus:ring-blue-500 border-slate-300">
                        <span>Noite</span>
                    </label>
                    <label class="flex items-center space-x-2 text-sm text-slate-600 cursor-pointer select-none">
                        <input type="radio" name="horario" value="Vespertino" class="w-4 h-4 text-blue-600 focus:ring-blue-500 border-slate-300">
                        <span>Tarde</span>
                    </label>
                    <label class="flex items-center space-x-2 text-sm text-slate-600 cursor-pointer select-none">
                        <input type="radio" name="horario" value="Matutino" class="w-4 h-4 text-blue-600 focus:ring-blue-500 border-slate-300">
                        <span>Manhã</span>
                    </label>
                    <label class="flex items-center space-x-2 text-sm text-slate-600 cursor-pointer select-none">
                        <input type="radio" name="horario" value="Diurno" class="w-4 h-4 text-blue-600 focus:ring-blue-500 border-slate-300">
                        <span>Dia</span>
                    </label>
                </div>
            </div>

            <!-- ÁREA DE INTERESSE -->
            <div>
                <span class="block text-sm font-semibold text-slate-700 mb-2">ÁREA DE INTERESSE:</span>
                <div class="space-y-2 bg-slate-50 p-3 rounded-lg border border-slate-100">
                    <label class="flex items-center space-x-2 text-sm text-slate-600 cursor-pointer select-none">
                        <input type="checkbox" name="area[]" value="Front End" class="w-4 h-4 rounded text-blue-600 focus:ring-blue-500 border-slate-300">
                        <span>Front End</span>
                    </label>
                    <label class="flex items-center space-x-2 text-sm text-slate-600 cursor-pointer select-none">
                        <input type="checkbox" name="area[]" value="Back End" class="w-4 h-4 rounded text-blue-600 focus:ring-blue-500 border-slate-300">
                        <span>Back End</span>
                    </label>
                    <label class="flex items-center space-x-2 text-sm text-slate-600 cursor-pointer select-none">
                        <input type="checkbox" name="area[]" value="Full Stack" class="w-4 h-4 rounded text-blue-600 focus:ring-blue-500 border-slate-300">
                        <span>Full Stack</span>
                    </label>
                </div>
            </div>

            <!-- ARQUIVO -->
            <div>
                <label class="block text-sm font-semibold text-slate-700 mb-1">Currículo / Arquivo:</label>
                <input type="file" name="arquivo" class="w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100 cursor-pointer border border-slate-200 rounded-lg p-1 bg-slate-50">
            </div>

            <!-- BOTÃO SUBMIT -->
            <div class="pt-2">
                <input type="submit" value="enviar" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2.5 px-4 rounded-lg shadow-sm hover:shadow transition duration-200 cursor-pointer uppercase tracking-wide text-sm">
            </div>

        </form>
    </div>

</body>

</html>