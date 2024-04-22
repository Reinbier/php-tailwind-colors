<style>
    :root {
        @foreach ($colorVariables ?? [] as $colorVariableName => $colorVariableValue) --{{ $colorVariableName }}:{{ $colorVariableValue }}; @endforeach
    }
</style>
