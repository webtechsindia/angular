<form action="" ng-sumit="login()">
    <div class="hero-unit">
        <div class="row">
            <div class="span6">
                username 
            </div>
            <div class="span6">
                <input type="text" class="input-small" required ng-model="username" >{{username}}
            </div>
        </div>
        <div class="row">
            <div class="span6">
                password
            </div>
            <div class="span6">
                <input type="password" class="input-small"  required ng-model="password"></inpu>{{password}}
            </div>
        </div>    
        <div class="row">
            <div class="span12">
                <input type="submit" value="Login" class="btn btn-primary">
            </div>

        </div>    
    </div>
</div>
</form>