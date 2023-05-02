




<form action="/categoryEdit/{{ $category->id }}" method="post">
                {{ csrf_field() }}
                @method('put')
               

                <label for="name">name: </label>
                <input type="text" name="name" id="name" value="{{ $category->name }}"><br />

                <label for="done">done: </label>
                <input type="text" name="done" id="done" value="{{ $category->done }}"><br />

                <label for="Start_date">Start_date</label>
                <input id="Start_date" name="Start_date" type="date">{{ $category->Start_date }}<br />

                <label for="End_date">End_date</label>
                <input id="End_date" name="End_date" type="date">{{ $category->End_date }}<br />
               
                
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