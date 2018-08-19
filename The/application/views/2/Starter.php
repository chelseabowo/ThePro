<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <title>Admin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/starter/css/style.css">
</head>

<body>
<form method="POST" action="">
<div class="container" style="margin-top: 50px;">
    <div id="app">
        
        <div v-show="currentstep == 1">
            <h1>Step 1</h1>
            <div class="form-group">
                <label for="nama_sekolah">Nama Sekolah</label>
                <input type="text" name="in_nama_sekolah" class="form-control" placeholder="Nama Sekolah">
                <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
            </div>
            <div class="form-group">
                <label for="id_sekolah">ID Sekolah</label>
                <input type="text" name="in_id_sekolah" class="form-control" placeholder="ID Sekolah" disabled>
            </div>
            <div class="form-group">
                <label for="no_telp">No. Telepon</label>
                <input type="text" name="in_no_telp" class="form-control" placeholder="No. Telepon">
            </div>
        </div>

        <div v-show="currentstep == 2">
            <h1>Step 2</h1>
            <div class="form-group">
                <label for="select">Example select</label>
                <select class="form-control" name="select">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
            </div>
        </div>

        <div v-show="currentstep == 3">
            <h1>Step 3</h1>
            <div class="form-group">
                <label for="textarea">Example textarea</label>
                <textarea class="form-control" name="textarea" rows="4"></textarea>
            </div>
            <div class="form-group">
                <label for="file">File input</label>
                <input type="file" class="form-control-file" name="file" aria-describedby="fileHelp">
                <small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
            </div>
        </div>

        <step v-for="step in steps" :currentstep="currentstep" :key="step.id" :step="step" :stepcount="steps.length" @step-change="stepChanged">
        </step>

        <script type="x-template" id="step-navigation-template">
            <ol class="step-indicator">
                <li v-for="step in steps" is="step-navigation-step" :key="step.id" :step="step" :currentstep="currentstep">
                </li>
            </ol>
        </script>

        <script type="x-template" id="step-navigation-step-template">
            <li :class="indicatorclass">
                <div class="step"><i :class="step.icon_class"></i></div>
                <div class="caption hidden-xs hidden-sm">Step <span v-text="step.id"></span>: <span v-text="step.title"></span></div>
            </li>
        </script>

        <script type="x-template" id="step-template">
            <div class="step-wrapper" :class="stepWrapperClass">
                <button type="button" class="btn btn-primary" @click="lastStep" :disabled="firststep">
                    Back
                </button>
                <button type="button" class="btn btn-primary" @click="nextStep" :disabled="laststep">
                    Next
                </button>
                <button type="submit" class="btn btn-primary" v-if="laststep">
                    Submit
                </button>
            </div>
        </script>
    </div>
</div>
</form>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/vue/2.4.4/vue.js'></script>
    <script  src="<?php echo base_url(); ?>assets/starter/js/index.js"></script>
</body>
</html>
