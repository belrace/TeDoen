




<form action="/lijstEdit/{{ $lijst->id }}" method="post">
                {{ csrf_field() }}
                @method('put')
               

                <label for="name">name: </label>
                <input type="text" name="name" id="name" value="{{ $lijst->name }}"><br />

                <label for="done">done: </label>
                <input type="text" name="done" id="done" value="{{ $lijst->done }}"><br />

                <label for="Project_id">Project_id</label>
                <input id="Project_id" name="Project_id" type="text" value="{{ $lijst->Project_id }}"><br />

                <label for="userid">User: </label>
                <select name="selUser">
                    @foreach($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach
                </select>
                <br />
                <input style="background-color: purple; padding: 2em; border-radius: 40px;" type="submit"
                    value="Opslaan">
            </form>